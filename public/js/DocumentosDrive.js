let documentosDriveCargados = new Set();

function ListarDocumentos(cod_prosp) {
    // let cod_prosp = document.getElementById("cod_prospecto_vta").value;
    var num_linea = "12PNdZJ-clfdMpQ7fp_quaTLm58L7bQms";
    $.ajax({
        url: "../api/ListarProspectoDocumentos",
        method: "GET",
        data: {
            codProspecto: cod_prosp,
        },
        crossDomain: true,
        dataType: "json",
        success: function (respuesta) {
            console.log(respuesta);

            // Mapeo: dsc_documento => ids de botón y texto
            const documentosEsperados = {
                DNI_Titular: {
                    botonId: "btn_DNI_ADJN_1",
                    nombreId: "DNI_ADJN_1",
                    inputId: "DniAdj1",
                },

                DNI_Alterno: {
                    botonId: "btn_DNI_ADJN_2_1",
                    nombreId: "DNI_ADJN_2_1",
                    inputId: "DniAdj2",
                },

                DNI_Alterno_anverso: {
                    botonId: "btn_DNI_ADJN_2_1",
                    nombreId: "DNI_ADJN_2_1",
                    inputId: "Dni2Adj1",
                },

                DNI_Alterno_reverso: {
                    botonId: "btn_DNI_ADJN_2_2",
                    nombreId: "DNI_ADJN_2_2",
                    inputId: "Dni2Adj2",
                },

                DNI_Aval_anverso: {
                    botonId: "btn_DNI_AVAL_1",
                    nombreId: "DNI_AVAL_1",
                    inputId: "DniAvalAdj1",
                },

                DNI_Aval_reverso: {
                    botonId: "btn_DNI_AVAL_2",
                    nombreId: "DNI_AVAL_2",
                    inputId: "DniAvalAdj2",
                },

                Recibo_de_servicio: {
                    botonId: "btn_RECIBO_SERV",
                    nombreId: "RECIBO_SERV",
                    inputId: "recServAdj",
                },

                Comprobante_pago: {
                    botonId: "btn_COMPROBANTE",
                    nombreId: "COMPROBANTE",
                    inputId: "comprobanteAdj",
                },

                Recibo_de_separacion: {
                    botonId: "btn_RECIBO_SEP",
                    nombreId: "RECIBO_SEP",
                    inputId: "RecSepAdj",
                },

                //CAMPOS NUEVOS

                Declaracion_Jurada: {
                    botonId: "btn_DECLARACION_J",
                    nombreId: "DECLARACION_J",
                    inputId: "declaracionFile",
                },

                Firma_Titular: {
                    botonId: "btn_FIRMA_TTLR",
                    nombreId: "FIRMA_TTLR",
                    inputId: "firmaTitular",
                },

                Declaracion_Jurada_2: {
                    botonId: "btn_DECLARACION_J_2",
                    nombreId: "DECLARACION_J_2",
                    inputId: "declaracionFile_2",
                },

                Firma_Titular_2: {
                    botonId: "btn_FIRMA_TTLR_2",
                    nombreId: "FIRMA_TTLR_2",
                    inputId: "firmaTitular_2",
                },
            };

            // Recorrer los documentos esperados
            for (const [dscDocumento, idsHtml] of Object.entries(
                documentosEsperados
            )) {
                const documentoEncontrado = respuesta.response.find(
                    (doc) => doc.dsc_documento === dscDocumento
                );

                const boton = document.getElementById(idsHtml.botonId);
                const nombreElemento = document.getElementById(
                    idsHtml.nombreId
                );

                if (boton && nombreElemento) {
                    boton.setAttribute("data-input_id", idsHtml.inputId); // ✅ SIEMPRE agregar el inputId

                    if (documentoEncontrado) {
                        boton.setAttribute(
                            "data-id_documento",
                            documentoEncontrado.dsc_id
                        );
                        boton.setAttribute(
                            "data-original-id_documento",
                            documentoEncontrado.dsc_id
                        );
                        boton.removeAttribute("data-mode");
                        nombreElemento.innerText =
                            documentoEncontrado.dsc_documento;

                        documentosDriveCargados.add(idsHtml.inputId);
                    } else {
                        // console.error(
                        //     `Documento ${dscDocumento} no encontrado en la respuesta.`
                        // );

                        boton.setAttribute("data-mode", "local");
                    }

                    // ✅ Siempre agregar ícono en el label si existe el label correspondiente
                    const label = document.getElementById(
                        "label_" + dscDocumento
                    );
                    if (label) {
                        const baseText = label.textContent
                            .trim()
                            .split("*")[0]
                            .trim(); // Extraer texto antes del '*'
                        label.innerHTML = `${baseText} ${
                            documentoEncontrado
                                ? '<i class="fa-solid fa-circle-check"></i>'
                                : '<i class="fa fa-circle-plus"></i>'
                        }`;
                    }
                }
            }
        }, // success
        error: function (e) {
            console.log("Error en la solicitud:", e.message);
        },
    });
}

// Captura cuando cualquier botón con clase "btn-visor-doc" abre el modal
$(document).on("click", ".btn-visor-doc", function () {
    const boton = this;

    $("#VisorDocumento").on("shown.bs.modal", function () {
        if (boton.getAttribute("data-mode") === "local") {
            VisorLocal(boton); // 👈 pasamos el botón
        } else {
            VisorDocumento(boton);
        }
        $(this).off("shown.bs.modal");
    });

    $("#VisorDocumento").modal("show");
});

$(document).on("change", "input[type='file']", function () {
    const input = this;
    const inputId = input.id;
    const boton = document.querySelector(`button[data-input_id='${inputId}']`);

    if (boton) {
        const archivo = input.files[0];

        if (archivo) {
            // ✅ Hay archivo, activamos modo local y borramos id del drive
            console.log(
                `Archivo seleccionado para input ${inputId}. Cambiando botón a modo local.`
            );
            boton.setAttribute("data-mode", "local");
            boton.removeAttribute("data-id_documento");
        } else {
            // ⚠️ No se seleccionó nada: restauramos estado remoto
            console.log(
                `No se seleccionó archivo para ${inputId}. Restaurando modo remoto si aplica.`
            );

            // Recuperamos el ID original si estaba en el HTML (opcional: almacenarlo antes)
            const originalId = boton.getAttribute("data-original-id_documento");
            if (originalId) {
                boton.setAttribute("data-id_documento", originalId);
                boton.removeAttribute("data-mode");
            }
        }
    }
});

function VisorDocumento(boton) {
    console.log("remoto");

    // Obtener el ID del documento desde el botón
    const idDocumento = boton.getAttribute("data-id_documento");

    if (idDocumento) {
        // Crear el iframe de preview de Google Drive
        const iframe = `
            <iframe src="https://drive.google.com/file/d/${idDocumento}/preview" 
                width="100%" height="500px" frameborder="0" allowfullscreen>
            </iframe>
        `;

        // Insertar el iframe dentro del div
        document.getElementById("view_documento").innerHTML = iframe;
    } else {
        document.getElementById("view_documento").innerHTML =
            "<p>No se pudo cargar el documento.</p>";
    }
}

function VisorLocal(boton) {
    console.log("local");

    const inputId = boton.getAttribute("data-input_id");
    const inputArchivo = document.getElementById(inputId);

    if (!inputArchivo) {
        document.getElementById("view_documento").innerHTML =
            "<p>Input de archivo no encontrado.</p>";
        return;
    }

    const archivo = inputArchivo.files[0];

    if (archivo) {
        const tipo = archivo.type;
        const urlArchivo = URL.createObjectURL(archivo);

        if (tipo === "application/pdf") {
            const iframe = `
                <iframe src="${urlArchivo}" 
                    width="100%" height="500px" frameborder="0" allowfullscreen>
                </iframe>
            `;
            document.getElementById("view_documento").innerHTML = iframe;
        } else if (tipo.startsWith("image/")) {
            const img = `
                <img src="${urlArchivo}" 
                    alt="Vista previa de la imagen" 
                    style="max-width: 100%; height: auto;"/>
            `;
            document.getElementById("view_documento").innerHTML = img;
        } else {
            document.getElementById("view_documento").innerHTML =
                "<p>Tipo de archivo no soportado. Solo PDF o imágenes.</p>";
        }
    } else {
        document.getElementById("view_documento").innerHTML =
            "<p>No se seleccionó ningún archivo.</p>";
    }
}
