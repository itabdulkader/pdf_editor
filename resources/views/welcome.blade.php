<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Element where PSPDFKit will be mounted. -->
<div id="pspdfkit" style="height: 100vh"></div>

<script src="assets/pspdfkit/pspdfkit.js"></script>

<script>
    var defaultConfiguration = {
        container: "#pspdfkit",
        document: "document.pdf", // Add the path to your document here.
    };

    let _instance;

    ///=============================toolbarItems=============================

    const toolbarItems = PSPDFKit.defaultToolbarItems.filter((item) => {
        return /\b(sidebar-thumbnails|zoom-in|zoom-out|signature|note|print|export|editor)\b/.test(
            item.type
        );
    });

    toolbarItems.push({
        type: "spacer",
    });

    toolbarItems.push({
        type: "search",
    });

    ///============================_toolbarEditorItems==============================
    const _toolbarEditorItems = PSPDFKit.defaultDocumentEditorToolbarItems
        .filter(
            (item) =>
                item.type === "remove"
        )
        .map((item) => {
            if (item.type === "add") {
                return {...item, className: "add-page"};
            } else if (item.type === "remove") {
                return {...item, className: "remove-page"};
            } else return item;
        });


    PSPDFKit.load({
        ...defaultConfiguration,
        toolbarItems: toolbarItems,
        documentEditorToolbarItems: _toolbarEditorItems,
        documentEditorFooterItems: PSPDFKit.defaultDocumentEditorFooterItems
            .filter((item) => item.type !== "save-as")
            .map((item) => {
                if (item.type === "cancel") return {...item, className: "cancel"};

                return item;
            }),
        styleSheets: ["/customized-document-editor/static/styles.css"],
    })
        .then(function (instance) {
            _instance = instance;
            console.log("PSPDFKit for Web successfully loaded!!", instance);

            return instance;
        })
        .catch(function (error) {
            console.error(error.message);
        });


</script>
</body>
</html>
