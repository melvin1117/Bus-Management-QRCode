﻿<?php ?>
<!DOCTYPE html >
<html >
<head>
    <title></title>
    <script type="text/javascript">
        function PrintDiv() {
            var contents = document.getElementById("dvContents").innerHTML;
            var frame1 = document.createElement('iframe');
            frame1.name = "frame1";
            frame1.style.position = "absolute";
            frame1.style.top = "-1000000px";
            document.body.appendChild(frame1);
            var frameDoc = frame1.contentWindow ? frame1.contentWindow : frame1.contentDocument.document ? frame1.contentDocument.document : frame1.contentDocument;
            frameDoc.document.open();
            frameDoc.document.write('<html><head><title>DIV Contents</title>');
            frameDoc.document.write('</head><body>');
            frameDoc.document.write(contents);
            frameDoc.document.write('</body></html>');
            frameDoc.document.close();
            setTimeout(function () {
                window.frames["frame1"].focus();
                window.frames["frame1"].print();
                document.body.removeChild(frame1);
            }, 500);
            return false;
        }
    </script>
</head>
<body>
    <form id="form1">
    <span style="font-size: 10pt; font-weight: bold; font-family: Arial">ASPSnippets.com
        Sample page</span>
    <hr />
    <div id="dvContents" style="border: 1px dotted black; padding: 5px; width: 300px">
        <span style="font-size: 10pt; font-weight: bold; font-family: Arial">Hello,
            <br />
            This is <span style="color: #18B5F0">Mudassar Khan</span>.<br />
            Hoping that you are enjoying my articles!</span>
    </div>
    <br />
    <input type="button" onclick="PrintDiv();" value="Print" />
    </form>
</body>
</html>
