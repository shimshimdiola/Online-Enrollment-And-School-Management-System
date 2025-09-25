<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="Generator" content="Microsoft Word 15 (filtered)" />
    <style>
        <!--
        /* Font Definitions */
        @font-face {
            font-family: Helvetica;
            panose-1: 2 11 6 4 2 2 2 2 2 4;
        }

        @font-face {
            font-family: "Cambria Math";
            panose-1: 2 4 5 3 5 4 6 3 2 4;
        }

        @font-face {
            font-family: Calibri;
            panose-1: 2 15 5 2 2 2 4 3 2 4;
        }

        @font-face {
            font-family: "Arial Unicode MS";
            panose-1: 2 11 6 4 2 2 2 2 2 4;
        }

        @font-face {
            font-family: "Bookman Old Style";
            panose-1: 2 5 6 4 5 5 5 2 2 4;
        }

        @font-face {
            font-family: "Segoe UI";
            panose-1: 2 11 5 2 4 2 4 2 2 3;
        }

        /* Style Definitions */
        p.MsoNormal,
        li.MsoNormal,
        div.MsoNormal {
            margin: 0in;
            font-size: 12.0pt;
            font-family: "Times New Roman", serif;
            border: none;
        }

        p.MsoHeader,
        li.MsoHeader,
        div.MsoHeader {
            mso-style-link: "Header Char";
            margin: 0in;
            font-size: 12.0pt;
            font-family: "Times New Roman", serif;
            border: none;
        }

        p.Body,
        li.Body,
        div.Body {
            mso-style-name: Body;
            margin-top: 0in;
            margin-right: 0in;
            margin-bottom: 8.0pt;
            margin-left: 0in;
            line-height: 107%;
            font-size: 11.0pt;
            font-family: "Calibri", sans-serif;
            color: black;
            border: none;
        }

        span.HeaderChar {
            mso-style-name: "Header Char";
            mso-style-link: Header;
            font-family: "Times New Roman", serif;
            border: none;
        }

        .MsoChpDefault {
            font-family: "Calibri", sans-serif;
        }

        .MsoPapDefault {
            margin-bottom: 8.0pt;
            line-height: 107%;
        }

        /* Page Definitions */
        @page WordSection1 {
            size: 8.5in 13.0in;
            margin: .5in 1.0in 1.0in 1.0in;
        }

        div.WordSection1 {
            page: WordSection1;
        }

        /* List Definitions */
        ol {
            margin-bottom: 0in;
        }

        ul {
            margin-bottom: 0in;
        }
        -->
    </style>
</head>

<body lang="EN-US">





    <?php
    $lrn = $_GET['lrn'];
    $glevel = $_GET['glevel'];
    $lname = $_GET['lname'];
    $fname = $_GET['fname'];
    $mname = $_GET['mname'];

    ?>









    <div class="WordSection1">
        <p class="MsoNormal">
            <span style="position: relative; z-index: 251700224;"><span style="
              position: absolute;
              left: -198px;
              top: -129px;
              width: 260px;
              height: 185px;
            ">
                    <table cellpadding="0" cellspacing="0" align="left" style="margin-left: 75px;">
                        <tr>
                            <td width="0" height="0"></td>
                            <td width="93"></td>
                            <td width="54"></td>
                            <td width="113"></td>
                        </tr>
                        <tr>
                            <td height="30"></td>

                        </tr>
                        <tr>
                            <td height="80"></td>
                        </tr>
                        <tr>
                            <td height="75"></td>
                            <td colspan="2"></td>
                            <td align="left" valign="top">

                            </td>
                        </tr>
                    </table>
                </span></span>&nbsp;
        </p>

        <br clear="ALL" />


        <p class="MsoHeader" align="center" style="text-align: center; border: none;">
            <img style="height: 50px; vertical-align: middle; margin-right: 10px;" src="Annex%202_BEEF%20Final_files/download.png" alt="ANNEX 1" />
            <b><span style="font-size: 14pt; font-family: 'Arial', sans-serif;">MODIFIED BASIC EDUCATION ENROLLMENT FORM</span></b>
        </p>

        <p class="MsoNormal" align="center" style="text-align: center;">
            <span style="font-size: 8pt; font-family: 'Arial', sans-serif;">THIS FORM IS NOT FOR SALE.</span>
        </p>



        <br>
        <div style="display: flex; justify-content: center;">
            <table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" width="646" style="border-collapse: collapse; border: none;">
                <tr style="height: 15.15pt;">
                    <td width="340" colspan="23" style="
              width: 255.15pt;
              border: none;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 15.15pt;
            ">
                        <p class="MsoNormal" style="border: none;">
                            <i><span style="font-size: 8pt; font-family: 'Arial', sans-serif;">&nbsp;</span></i>
                        </p>
                    </td>
                    <td width="306" colspan="12" style="
              width: 229.45pt;
              border: none;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 15.15pt;
            ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <i><span style="font-size: 8pt; font-family: 'Arial', sans-serif;">Check the appropriate box only:</span></i>
                        </p>
                    </td>
                </tr>
                <tr style="height: 15.15pt;">
                    <td width="122" style="
              width: 91.85pt;
              border: none;
              border-right: solid windowtext 1.5pt;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 15.15pt;
            ">
                        <p class="MsoNormal" style="border: none;">
                            <span style="font-size: 8pt; font-family: 'Arial', sans-serif;">School Year:</span>
                        </p>
                    </td>

                    <?php
                    $word = date('Y');
                    $nlen = strlen($word);
                    $lettersArray = str_split($word);

                    ?>

                    <?php
                    // (isset($lettersArray[$i]) ? $lettersArray[$i] : '')
                    for ($i = 0; $i < $nlen; $i++) {
                        echo '  <td width="23" style="
        width: 17.55pt;
        border: solid windowtext 1.5pt;
        border-left: none;
        padding: 0in 5.4pt 0in 5.4pt;
        height: 3.4pt;
      ">
                        <p class="MsoNormal" style="text-align: justify; line-height: 150%;">
                            <span style="
            font-size: 10pt;
            line-height: 150%;
            font-family: \'Arial\', sans-serif;
        ">' . (isset($lettersArray[$i]) ? $lettersArray[$i] : '') . '</span>
                        </p>
                    </td>';
                    }
                    ?>







                    <td width="16" colspan="3" valign="top" style="
              width: 11.8pt;
              border: none;
              border-right: solid windowtext 1.5pt;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 15.15pt;
            ">
                        <p class="MsoNormal" align="center" style="text-align: center; border: none;">
                            <span style="font-family: 'Arial', sans-serif;">-</span>
                        </p>
                    </td>






                    <?php
                    $word = date('Y') + 1;
                    $nlen = strlen($word);
                    $lettersArray = str_split($word);

                    ?>

                    <?php
                    // (isset($lettersArray[$i]) ? $lettersArray[$i] : '')
                    for ($i = 0; $i < $nlen; $i++) {
                        echo '  <td width="23" style="
        width: 17.55pt;
        border: solid windowtext 1.5pt;
        border-left: none;
        padding: 0in 5.4pt 0in 5.4pt;
        height: 3.4pt;
      ">
                        <p class="MsoNormal" style="text-align: justify; line-height: 150%;">
                            <span style="
            font-size: 10pt;
            line-height: 150%;
            font-family: \'Arial\', sans-serif;
        ">' . (isset($lettersArray[$i]) ? $lettersArray[$i] : '') . '</span>
                        </p>
                    </td>';
                    }
                    ?>












                    <td width="76" colspan="4" style="
              width: 56.8pt;
              border: none;
              border-right: solid windowtext 1.5pt;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 15.15pt;
            ">
                        <p class="MsoNormal" align="right" style="text-align: right; border: none;">
                            <span style="font-size: 8pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="23" colspan="2" style="
              width: 17pt;
              border: solid windowtext 1.5pt;
              border-left: none;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 15.15pt;
            ">
                        <p class="MsoNormal" align="right" style="text-align: right; border: none;">
                            <span style="font-size: 8pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="94" colspan="2" style="
              width: 70.85pt;
              border: none;
              border-right: solid windowtext 1.5pt;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 15.15pt;
            ">
                        <p class="MsoNormal" style="border: none;">
                            <span style="font-size: 8pt; font-family: 'Arial', sans-serif;">No LRN</span>
                        </p>
                    </td>










                    <td width="23" style="
              width: 17pt;
              border: solid windowtext 1.5pt;
              border-left: none;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 15.15pt;
            ">
                        <p class="MsoNormal" style="border: none;">
                            <span style="font-size: 8pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>


















                    <td width="82" colspan="4" style="
              width: 61.55pt;
              border: none;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 15.15pt;
            ">
                        <p class="MsoNormal" style="border: none;">
                            <span style="font-size: 8pt; font-family: 'Arial', sans-serif;">With LRN</span>
                        </p>
                    </td>
                    <td style="border: none; padding: 0in 0in 0in 0in;" width="84" colspan="3">
                        <p class="MsoNormal">&nbsp;</p>
                    </td>
                </tr>
                <tr style="height: 1.9pt;">
                    <td width="122" style="
              width: 91.85pt;
              border: none;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 1.9pt;
            ">
                        <p class="MsoNormal" style="border: none;">
                            <span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="16" style="
              width: 11.9pt;
              border: none;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 1.9pt;
            ">
                        <p class="MsoNormal" style="border: none;">
                            <span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="24" colspan="2" style="
              width: 17.75pt;
              border: none;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 1.9pt;
            ">
                        <p class="MsoNormal" style="border: none;">
                            <span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="16" colspan="3" style="
              width: 11.8pt;
              border: none;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 1.9pt;
            ">
                        <p class="MsoNormal" style="border: none;">
                            <span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="18" colspan="2" style="
              width: 13.3pt;
              border: none;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 1.9pt;
            ">
                        <p class="MsoNormal" style="border: none;">
                            <span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="26" colspan="4" valign="top" style="
              width: 19.3pt;
              border: none;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 1.9pt;
            ">
                        <p class="MsoNormal" align="center" style="text-align: center; border: none;">
                            <span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="16" colspan="2" style="
              width: 11.75pt;
              border: none;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 1.9pt;
            ">
                        <p class="MsoNormal" style="border: none;">
                            <span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="16" colspan="3" style="
              width: 11.8pt;
              border: none;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 1.9pt;
            ">
                        <p class="MsoNormal" style="border: none;">
                            <span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="23" colspan="2" style="
              width: 17pt;
              border: none;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 1.9pt;
            ">
                        <p class="MsoNormal" style="border: none;">
                            <span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="16" style="
              width: 11.8pt;
              border: none;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 1.9pt;
            ">
                        <p class="MsoNormal" style="border: none;">
                            <span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="68" colspan="3" style="
              width: 51.1pt;
              border: none;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 1.9pt;
            ">
                        <p class="MsoNormal" align="right" style="text-align: right; border: none;">
                            <span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="46" colspan="2" style="
              width: 34.5pt;
              border: none;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 1.9pt;
            ">
                        <p class="MsoNormal" align="right" style="text-align: right; border: none;">
                            <span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="83" colspan="3" style="
              width: 61.95pt;
              border: none;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 1.9pt;
            ">
                        <p class="MsoNormal" align="right" style="text-align: right; border: none;">
                            <span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="49" colspan="2" style="
              width: 36.6pt;
              border: none;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 1.9pt;
            ">
                        <p class="MsoNormal" style="border: none;">
                            <span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="28" colspan="2" style="
              width: 21.25pt;
              border: none;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 1.9pt;
            ">
                        <p class="MsoNormal" style="border: none;">
                            <span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="24" style="
              width: 17.65pt;
              border: none;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 1.9pt;
            ">
                        <p class="MsoNormal" style="border: none;">
                            <span lang="EN-PH" style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td style="border: none; padding: 0in 0in 0in 0in;" width="58">
                        <p class="MsoNormal">&nbsp;</p>
                    </td>
                </tr>
                <tr style="height: 15pt;">
                    <td width="122" style="
              width: 91.85pt;
              border: none;
              border-right: solid windowtext 1.5pt;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 15pt;
            ">
                        <p class="MsoNormal" style="border: none;">
                            <span style="font-size: 8pt; font-family: 'Arial', sans-serif;">Grade level to Enroll:
                            </span>
                        </p>
                    </td>
                    <?php
                    $word = $glevel;
                    $nlen = strlen($word);
                    $lettersArray = str_split($word);

                    ?>

                    <?php
                    // (isset($lettersArray[$i]) ? $lettersArray[$i] : '')
                    for ($i = 0; $i < $nlen; $i++) {
                        echo '<td width="23" style="
        width: 17.55pt;
        border: solid windowtext 1.5pt;
        border-left: none;
        padding: 0in 5.4pt 0in 5.4pt;
      
      ">
                        <p class="MsoNormal" style="text-align: justify; line-height: 150%;">
                            <span style="
            font-size: 10pt;
            line-height: 150%;
            font-family: \'Arial\', sans-serif;
        ">' . (isset($lettersArray[$i]) ? $lettersArray[$i] : '') . '</span>
                        </p>
                    </td>';
                    }
                    ?>



                    <td width="52" colspan="6" style="
              width: 38.95pt;
              border: none;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 15pt;
            ">
                        <p class="MsoNormal" align="right" style="text-align: right; border: none;">
                            <span style="font-size: 8pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="48" colspan="6" style="
              width: 35.8pt;
              border: none;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 15pt;
            ">
                        <p class="MsoNormal" style="border: none;">
                            <span style="font-size: 8pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="45" style="
              width: 33.45pt;
              border: none;
              border-right: solid windowtext 1.5pt;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 15pt;
            ">
                        <p class="MsoNormal" style="border: none;">
                            <span style="font-size: 8pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="23" colspan="1" style="
              width: 17pt;
              border: solid windowtext 1.5pt;
              border-left: none;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 15pt;
            ">
                        <p class="MsoNormal" style="border: none;">
                            <span style="font-size: pt; font-family: 'Arial', sans-serif;">&nbsp; </span>
                        </p>
                    </td>
                    <td width="148" colspan="5" style="
              width: 111.05pt;
              border: none;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 15pt;
            ">
                        <p class="MsoNormal" style="border: none;">
                            <span style="font-size: 8pt; font-family: 'Arial', sans-serif;">Returning (Balik-Aral)</span>
                        </p>
                    </td>
                    <td style="border: none; padding: 0in 0in 0in 0in;" width="135" colspan="5">
                        <p class="MsoNormal">&nbsp;</p>
                    </td>
                </tr>
                <tr height="0">
                    <td width="121" style="border: none;"></td>
                    <td width="16" style="border: none;"></td>
                    <td width="16" style="border: none;"></td>
                    <td width="8" style="border: none;"></td>
                    <td width="8" style="border: none;"></td>
                    <td width="2" style="border: none;"></td>
                    <td width="6" style="border: none;"></td>
                    <td width="8" style="border: none;"></td>
                    <td width="12" style="border: none;"></td>
                    <td width="1" style="border: none;"></td>
                    <td width="7" style="border: none;"></td>
                    <td width="16" style="border: none;"></td>
                    <td width="4" style="border: none;"></td>
                    <td width="12" style="border: none;"></td>
                    <td width="4" style="border: none;"></td>
                    <td width="11" style="border: none;"></td>
                    <td width="1" style="border: none;"></td>
                    <td width="4" style="border: none;"></td>
                    <td width="12" style="border: none;"></td>
                    <td width="11" style="border: none;"></td>
                    <td width="16" style="border: none;"></td>
                    <td width="5" style="border: none;"></td>
                    <td width="44" style="border: none;"></td>
                    <td width="19" style="border: none;"></td>
                    <td width="4" style="border: none;"></td>
                    <td width="42" style="border: none;"></td>
                    <td width="52" style="border: none;"></td>
                    <td width="23" style="border: none;"></td>
                    <td width="8" style="border: none;"></td>
                    <td width="23" style="border: none;"></td>
                    <td width="25" style="border: none;"></td>
                    <td width="25" style="border: none;"></td>
                    <td width="3" style="border: none;"></td>
                    <td width="23" style="border: none;"></td>
                    <td width="57" style="border: none;"></td>
                </tr>
            </table>
        </div>


        <p class="MsoNormal">
            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
        </p>
        <div style="display: flex; justify-content: center;">
            <table class="MsoTableGrid" border="0" cellspacing="0" cellpadding="0" width="633" style="
          width: 475pt;
          border-collapse: collapse;
          border: none;
        ">
                <tr style="height: 13.5pt;">
                    <td width="127" valign="top" style="width: 100.1pt; padding: 0in 5.4pt 0in 5.4pt; height: 13.5pt;">
                        <p class="MsoNormal" style="text-align: justify;">
                            <b><span style="font-size: 10pt; font-family: 'Arial', sans-serif;">INSTRUCTIONS:</span></b>
                        </p>
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="507" valign="top" style="
              width: 379.9pt;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 13.5pt;
            ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <i><span style="font-size: 9pt; font-family: 'Arial', sans-serif;">Print legibly all information required in CAPITAL letters.
                                    Submit accomplished form to the
                                    Person-in-Charge/Registrar/Class Adviser. Use black or blue
                                    pen only.</span></i>
                        </p>
                    </td>
                </tr>
            </table>

        </div>

        <p class="MsoNormal" style="text-align: justify;">
            <span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
        </p>

        <div align="center">
            <table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" width="648" style="border-collapse: collapse; border: none;">
                <tr>
                    <td width="648" colspan="36" style="
                width: 485.7pt;
                border: none;
                background: #d9e2f3;
                padding: 0in 5.4pt 0in 5.4pt;
              ">
                        <p class="MsoNormal" align="center" style="text-align: center; border: none;">
                            <b><span style="font-family: 'Arial', sans-serif;">STUDENT INFORMATION</span></b>
                        </p>
                    </td>
                </tr>
                <tr style="height: 5.65pt;">
                    <td width="648" colspan="36" style="
                width: 485.7pt;
                border: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 5.65pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                </tr>
                <tr style="height: 5.65pt;">
                    <td width="340" colspan="15" style="width: 254.85pt; border: none; padding: 0in 5.4pt 0in 5.4pt; height: 5.65pt; white-space: nowrap;">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">PSA Birth Certificate No. (if available upon registration)</span>
                        </p>
                    </td>

                    <td width="154" colspan="13" style="
                width: 115.4pt;
                border: none;
                border-bottom: solid windowtext 1pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 5.65pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="154" colspan="8" style="
                width: 115.45pt;
                border: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 5.65pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                </tr>
                <tr style="height: 3.5pt;">
                    <td width="191" colspan="2" style="
                width: 143.5pt;
                border: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 3.5pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="456" colspan="34" style="
                width: 342.2pt;
                border: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 3.5pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                </tr>
                <tr style="height: 2.5pt;">
                    <td width="191" colspan="2" style="
                width: 143.5pt;
                border: none;
                border-right: solid windowtext 1.5pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 2.5pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">Learner Reference No. (LRN)</span>
                        </p>
                    </td>







                    <?php
                    $word = $lrn;
                    if (empty($word)) {
                        for ($i = 0; $i < 10; $i++) {
                            echo ' <td width="23" style="
        width: 17.55pt;
        border: solid windowtext 1.5pt;
        border-left: none;
        padding: 0in 5.4pt 0in 5.4pt;
        height: 3.4pt;
      ">
                        <p class="MsoNormal" style="text-align: justify; line-height: 150%;">
                            <span style="
            font-size: 9pt;
            line-height: 150%;
            font-family: \'Arial\', sans-serif;
        "></span>
                        </p>
                    </td>';
                        }
                    }

                    $nlen = strlen($word);
                    $lettersArray = str_split($word);

                    ?>

                    <?php
                    // (isset($lettersArray[$i]) ? $lettersArray[$i] : '')
                    for ($i = 0; $i < $nlen; $i++) {
                        echo '  <td width="23" style="
        width: 17.55pt;
        border: solid windowtext 1.5pt;
        border-left: none;
        padding: 0in 5.4pt 0in 5.4pt;
        height: 3.4pt;
      ">
                        <p class="MsoNormal" style="text-align: justify; line-height: 150%;">
                            <span style="
            font-size: 10pt;
            line-height: 150%;
            font-family: \'Arial\', sans-serif;
        ">' . (isset($lettersArray[$i]) ? $lettersArray[$i] : '') . '</span>
                        </p>
                    </td>';
                    }
                    ?>









                    <td width="16" style="
                width: 11.8pt;
                border: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 2.5pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; line-height: 150%; border: none;">
                            <span style="font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="200" colspan="12" style="
                width: 150.25pt;
                border: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 2.5pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                </tr>
                <tr style="height: 1.9pt;">
                    <td width="648" colspan="36" style="
                width: 485.7pt;
                border: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 1.9pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                </tr>
                <tr style="height: 12.7pt;">
                    <td width="648" colspan="36" valign="top" style="
                width: 485.7pt;
                border: none;
                background: #d9e2f3;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 12.7pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <b><span style="font-size: 10pt; font-family: 'Arial', sans-serif;">&nbsp;</span></b>
                        </p>
                    </td>
                </tr>
                <tr style="height: 3.4pt;">


                    <td width="168" style="
                width: 125.95pt;
                border: none;
                border-right: solid windowtext 1.5pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 3.4pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">LAST NAME</span>
                        </p>
                    </td>

                    <?php
                    $word = $lname;
                    $nlen = strlen($word);
                    $lettersArray = str_split($word);

                    ?>

                    <?php
                    // (isset($lettersArray[$i]) ? $lettersArray[$i] : '')
                    for ($i = 0; $i < $nlen; $i++) {
                        echo '  <td width="23" style="
        width: 17.55pt;
        border: solid windowtext 1.5pt;
        border-left: none;
        padding: 0in 5.4pt 0in 5.4pt;
        height: 3.4pt;
      ">
                        <p class="MsoNormal" style="text-align: justify; line-height: 150%;">
                            <span style="
            font-size: 10pt;
            line-height: 150%;
            font-family: \'Arial\', sans-serif;
        ">' . (isset($lettersArray[$i]) ? $lettersArray[$i] : '') . '</span>
                        </p>
                    </td>';
                    }
                    ?>








                    <td style="border: none; padding: 0in 0in 0in 0in;" width="12">
                        <p class="MsoNormal">&nbsp;</p>
                    </td>
                </tr>
                <tr style="height: 3.4pt;">
                    <td width="168" valign="top" style="
                width: 125.95pt;
                border: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 3.4pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <b><span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span></b>
                        </p>
                    </td>
                    <td width="23" valign="top" style="
                width: 17.55pt;
                border: none;
                border-bottom: solid windowtext 1.5pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 3.4pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <b><span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span></b>
                        </p>
                    </td>
                    <td style="border: none; padding: 0in 0in 0in 0in;" width="456" colspan="34">
                        <p class="MsoNormal">&nbsp;</p>
                    </td>
                </tr>
                <tr style="height: 3.4pt;">
                    <td width="168" style="
                width: 125.95pt;
                border: none;
                border-right: solid windowtext 1.5pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 3.4pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">FIRST NAME</span>
                        </p>
                    </td>



                    <?php
                    $word = $fname;
                    $nlen = strlen($word);
                    $lettersArray = str_split($word);

                    ?>

                    <?php
                    // (isset($lettersArray[$i]) ? $lettersArray[$i] : '')
                    for ($i = 0; $i < $nlen; $i++) {
                        echo '  <td width="23" style="
        width: 17.55pt;
        border: solid windowtext 1.5pt;
        border-left: none;
        padding: 0in 5.4pt 0in 5.4pt;
        height: 3.4pt;
      ">
                        <p class="MsoNormal" style="text-align: justify; line-height: 150%;">
                            <span style="
            font-size: 10pt;
            line-height: 150%;
            font-family: \'Arial\', sans-serif;
        ">' . (isset($lettersArray[$i]) ? $lettersArray[$i] : '') . '</span>
                        </p>
                    </td>';
                    }
                    ?>









































































                    <td style="border: none; padding: 0in 0in 0in 0in;" width="12">
                        <p class="MsoNormal">&nbsp;</p>
                    </td>
                </tr>
                <tr style="height: 3.4pt;">
                    <td width="168" style="
                width: 125.95pt;
                border: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 3.4pt;
              ">
                        <p class="MsoNormal" style="text-align: justify;">
                            <span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="23" style="
                width: 17.55pt;
                border: none;
                border-bottom: solid windowtext 1.5pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 3.4pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; line-height: 150%;">
                            <span style="
                    font-size: 2pt;
                    line-height: 150%;
                    font-family: 'Arial', sans-serif;
                  ">&nbsp;</span>
                        </p>
                    </td>
                    <td style="border: none; padding: 0in 0in 0in 0in;" width="456" colspan="34">
                        <p class="MsoNormal">&nbsp;</p>
                    </td>
                </tr>
                <tr style="height: 3.4pt;">
                    <td width="168" style="
                width: 125.95pt;
                border: none;
                border-right: solid windowtext 1.5pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 3.4pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">MIDDLE NAME</span>
                        </p>
                    </td>



                    <?php
                    $word = $mname;
                    $nlen = strlen($word);
                    $lettersArray = str_split($word);

                    ?>

                    <?php
                    // (isset($lettersArray[$i]) ? $lettersArray[$i] : '')
                    for ($i = 0; $i < $nlen; $i++) {
                        echo '  <td width="23" style="
        width: 17.55pt;
        border: solid windowtext 1.5pt;
        border-left: none;
        padding: 0in 5.4pt 0in 5.4pt;
        height: 3.4pt;
      ">
                        <p class="MsoNormal" style="text-align: justify; line-height: 150%;">
                            <span style="
            font-size: 10pt;
            line-height: 150%;
            font-family: \'Arial\', sans-serif;
        ">' . (isset($lettersArray[$i]) ? $lettersArray[$i] : '') . '</span>
                        </p>
                    </td>';
                    }
                    ?>












                </tr>
                <tr style="height: 5.3pt;">
                    <td width="312" colspan="12" style="
                width: 233.65pt;
                border: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 5.3pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 1pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="168" colspan="15" style="
                width: 1.75in;
                border: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 5.3pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 1pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="168" colspan="9" style="
                width: 126.05pt;
                border: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 5.3pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 1pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                </tr>
                <tr style="height: 3.5pt;">
                    <td width="312" colspan="12" style="
                width: 233.65pt;
                border: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 3.5pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">EXTENSION NAME e.g. Jr., III (if applicable)</span>
                        </p>
                    </td>
                    <td width="168" colspan="15" style="
                width: 1.75in;
                border: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 3.5pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="168" colspan="9" style="
                width: 126.05pt;
                border: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 3.5pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                </tr>

            </table>
        </div>

        <p class="MsoNormal" style="text-align: justify;">
            <span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
        </p>
        <br>
        <div style="display: flex; justify-content: center;">
            <table class="MsoTableGrid" border="0" cellspacing="0" cellpadding="0" width="650" style="
          
              width: 494.3pt;
          border-collapse: collapse;
          border: none;
          margin-left: 6.75pt;
          margin-right: 6.75pt; 
            ">
                <tr style="  width: 100px;">


                    <td width="110" style="
    width: 85.9pt;
    border: none;
    border-right: solid windowtext 1.5pt;
    padding: 0in 5.4pt 0in 5.4pt;
    height: 15.15pt;
">
                        <p class="MsoNormal" style=" border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">DATE&nbsp;OF&nbsp;BIRTH<br />&nbsp;</span><span style="font-size: 6pt; font-family: 'Arial', sans-serif;">(Month/Day/Year)</span>
                        </p>
                    </td>







                    <?php
                    $word = date('m/d/Y');
                    $nlen = strlen($word);
                    $lettersArray = str_split($word);

                    ?>

                    <?php
                    // (isset($lettersArray[$i]) ? $lettersArray[$i] : '')
                    for ($i = 0; $i < $nlen; $i++) {
                        echo '  <td width="23" style="
        width: 17.55pt;
        border: solid windowtext 1.5pt;
        border-left: none;
        padding: 0in 5.4pt 0in 5.4pt;
        height: 3.4pt;
      ">
                        <p class="MsoNormal" style="text-align: justify; line-height: 150%;">
                            <span style="
            font-size: 10pt;
            line-height: 150%;
            font-family: \'Arial\', sans-serif;
        ">' . (isset($lettersArray[$i]) ? $lettersArray[$i] : '') . '</span>
                        </p>
                    </td>';
                    }
                    ?>














                    <td width="66" colspan="3" style="
                width: 49.8pt;
                border: none;
                border-right: solid windowtext 1.5pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 15.15pt;
              ">
                        <p class="MsoNormal" align="right" style="text-align: right; border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">SEX</span>
                        </p>
                    </td>
                    <td width="21" style="
                width: 15.75pt;
                border: solid windowtext 1.5pt;
                border-left: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 15.15pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">&nbsp;✓</span>
                        </p>
                    </td>
                    <td width="45" style="
                width: 33.5pt;
                border: none;
                border-right: solid windowtext 1.5pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 15.15pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 8pt; font-family: 'Arial', sans-serif;">MALE</span>
                        </p>
                    </td>
                    <td width="20" colspan="2" style="
                width: 14.7pt;
                border: solid windowtext 1.5pt;
                border-left: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 15.15pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">&nbsp;✓</span>
                        </p>
                    </td>
                    <td width="58" colspan="3" style="
                width: 43.7pt;
                border: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 15.15pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 8pt; font-family: 'Arial', sans-serif;">FEMALE</span>
                        </p>
                    </td>
                    <td width="19" style="
                width: 14.15pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 15.15pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="44" colspan="3" style="
                width: 32.95pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 15.15pt;
              ">
                        <p class="MsoNormal" align="right" style="text-align: right; border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">AGE</span>
                        </p>
                    </td>
                    <td width="37" colspan="2" style="
                width: 27.95pt;
                border: none;
                border-bottom: solid windowtext 1pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 15.15pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif; font-weight: bold;">&nbsp;21</span>
                        </p>
                    </td>
                </tr>
                <tr style="height: 3.5pt;">
                    <td width="649" colspan="31" style="
                width: 486.95pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 3.5pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                </tr>
                <tr style="height: 12.6pt;">
                    <td width="240" colspan="7" style="
                width: 2.5in;
                border: none;
                border-right: solid windowtext 1.5pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 12.6pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 8.5pt; font-family: 'Arial', sans-serif;">Belonging to any Indigenous Peoples (IP) Community/Indigenous
                                Cultural Community?</span>
                        </p>
                    </td>
                    <td width="24" colspan="2" style="
                width: 0.25in;
                border: solid windowtext 1.5pt;
                border-left: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 12.6pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; line-height: 150%; border: none;">
                            <span style="
                    font-size: 8pt;
                    line-height: 150%;
                    font-family: 'Arial', sans-serif;
                  ">&nbsp;</span>
                        </p>
                    </td>
                    <td width="39" colspan="3" style="
                width: 29.45pt;
                border: none;
                border-right: solid windowtext 1.5pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 12.6pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">No</span>
                        </p>
                    </td>
                    <td width="21" colspan="2" style="
                width: 15.55pt;
                border: solid windowtext 1.5pt;
                border-left: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 12.6pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="48" colspan="2" style="
                width: 0.5in;
                border: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 12.6pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">Yes</span>
                        </p>
                    </td>
                    <td width="138" colspan="7" style="
                width: 103.5pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 12.6pt;
              ">
                        <p class="MsoNormal" style="border: none;">
                            <span style="font-size: 9pt; font-family: 'Arial', sans-serif;">If Yes, please specify:</span>
                        </p>
                    </td>
                    <td width="139" colspan="8" valign="bottom" style="
                width: 104.45pt;
                border: none;
                border-bottom: solid windowtext 1pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 12.6pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 8pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                </tr>
                <tr style="height: 3.5pt;">
                    <td width="510" colspan="23" style="
                width: 382.5pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 3.5pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="139" colspan="8" style="
                width: 104.45pt;
                border: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 3.5pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                </tr>
                <tr style="height: 16.8pt;">
                    <td width="115" style="width: 85.9pt; padding: 0in 5.4pt 0in 5.4pt; height: 16.8pt;">
                        <p class="MsoNormal" style="text-align: justify; border: none; white-space: nowrap;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">Mother Tongue</span>
                        </p>

                    </td>

                    <td width="267" colspan="16" style="
                width: 200.5pt;
                border: none;
                border-bottom: solid windowtext 1pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 16.8pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="267" colspan="14" style="
                width: 200.55pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 16.8pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                </tr>
                <tr style="height: 12.7pt;margin-top: 10px;">
                    <td width="650" colspan="31" style="
                width: 487.2pt;
                background: #d9e2f3;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 12.7pt;
              ">
                        <p class="MsoNormal" style="border: none;">
                            <b><span style="
                      font-size: 10pt;
                      font-family: 'Arial', sans-serif;
                      color: black;
                    ">ADDRESS</span></b>
                        </p>
                    </td>
                </tr>
                <tr style="height: 13.1pt;">
                    <td width="650" colspan="31" style="
                width: 487.2pt;
                border: none;
                border-bottom: solid windowtext 1pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 13.1pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <sup><span style="font-size: 10pt; font-family: 'Arial', sans-serif;">House Number and Street</span></sup>
                        </p>
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                </tr>
                <tr style="height: 13.1pt;">
                    <td width="650" colspan="31" style="
                width: 487.2pt;
                border: none;
                border-bottom: solid windowtext 1pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 13.1pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <sup><span style="font-size: 10pt; font-family: 'Arial', sans-serif;">Barangay</span></sup>
                        </p>
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                </tr>
                <tr style="height: 13.1pt;">
                    <td width="474" colspan="21" style="
                width: 355.5pt;
                border: none;
                border-bottom: solid windowtext 1pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 13.1pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <sup><span style="font-size: 10pt; font-family: 'Arial', sans-serif;">City/Municipality/Province/Country</span></sup>
                        </p>
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="72" colspan="3" style="
                width: 54.05pt;
                border: none;
                border-right: solid windowtext 1pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 13.1pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">Zip Code</span>
                        </p>
                    </td>
                    <td width="26" colspan="3" style="
                width: 19.4pt;
                border-top: none;
                border-left: none;
                border-bottom: solid windowtext 1pt;
                border-right: solid windowtext 1pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 13.1pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="26" style="
                width: 19.4pt;
                border-top: none;
                border-left: none;
                border-bottom: solid windowtext 1pt;
                border-right: solid windowtext 1pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 13.1pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="26" colspan="2" style="
                width: 19.4pt;
                border-top: none;
                border-left: none;
                border-bottom: solid windowtext 1pt;
                border-right: solid windowtext 1pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 13.1pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="26" style="
                width: 19.45pt;
                border-top: none;
                border-left: none;
                border-bottom: solid windowtext 1pt;
                border-right: solid windowtext 1pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 13.1pt;
              ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                </tr>
                <tr height="0">
                    <td width="115" style="border: none;"></td>
                    <td width="22" style="border: none;"></td>
                    <td width="22" style="border: none;"></td>
                    <td width="22" style="border: none;"></td>
                    <td width="22" style="border: none;"></td>
                    <td width="22" style="border: none;"></td>
                    <td width="13" style="border: none;"></td>
                    <td width="9" style="border: none;"></td>
                    <td width="15" style="border: none;"></td>
                    <td width="8" style="border: none;"></td>
                    <td width="22" style="border: none;"></td>
                    <td width="9" style="border: none;"></td>
                    <td width="13" style="border: none;"></td>
                    <td width="7" style="border: none;"></td>
                    <td width="15" style="border: none;"></td>
                    <td width="33" style="border: none;"></td>
                    <td width="10" style="border: none;"></td>
                    <td width="24" style="border: none;"></td>
                    <td width="21" style="border: none;"></td>
                    <td width="45" style="border: none;"></td>
                    <td width="3" style="border: none;"></td>
                    <td width="17" style="border: none;"></td>
                    <td width="19" style="border: none;"></td>
                    <td width="36" style="border: none;"></td>
                    <td width="3" style="border: none;"></td>
                    <td width="19" style="border: none;"></td>
                    <td width="4" style="border: none;"></td>
                    <td width="26" style="border: none;"></td>
                    <td width="14" style="border: none;"></td>
                    <td width="12" style="border: none;"></td>
                    <td width="26" style="border: none;"></td>
                </tr>
            </table>
        </div>


        <table class="MsoTableGrid" border="0" cellspacing="0" cellpadding="0" /* align="center" */ width="659" style="
          width: 494.3pt;
          border-collapse: collapse;
          border: none;
  
        ">
            <tr style="height: 12.7pt;">
                <td width="659" colspan="3" style="
              width: 494pt;
              background: #d9e2f3;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 12.7pt;
            ">
                    <p class="MsoNormal" style="border: none;">
                        <b><span style="
                    font-size: 10pt;
                    font-family: 'Arial', sans-serif;
                    color: black;
                  ">PARENT’S/GUARDIAN’S INFORMATION</span></b>
                    </p>
                </td>
                <td style="border: none; padding: 0in 0in 0in 0in;" width="0">
                    <p class="MsoNormal">&nbsp;</p>
                </td>
            </tr>
            <tr style="height: 13.1pt;">
                <td width="314" colspan="2" style="
              width: 235.2pt;
              border: none;
              border-bottom: solid windowtext 1pt;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 13.1pt;
            ">
                    <p class="MsoNormal" style="text-align: justify; border: none;">
                        <sup><span style="font-size: 10pt; font-family: 'Arial', sans-serif;">Father's Name (Last Name, First Name, Middle
                                Name)</span></sup>
                    </p>
                    <p class="MsoNormal" style="text-align: justify; border: none;">
                        <span style="font-size: 10pt; font-weight: bold; font-family: 'Arial' , sans-serif;">&nbsp;<?php echo 'Diola Ricardo M.' ?></span>
                    </p>
                </td>
                <td width="314" colspan="2" style="
              width: 235.2pt;
              border: none;
              border-bottom: solid windowtext 1pt;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 13.1pt;
            ">
                    <p class="MsoNormal" style="text-align: justify; border: none;">
                        <sup><span style="font-size: 10pt; font-family: 'Arial', sans-serif;">Mother’s Maiden Name(Last Name, First Name, Middle
                                Name)</span></sup>
                    </p>
                    <p class="MsoNormal" style="text-align: justify; border: none;">
                        <span style="font-size: 10pt; font-family: 'Arial', sans-serif; font-weight: bold;">&nbsp; <?php echo 'Diola Mary Jane B.' ?> </span>
                    </p>
                </td>
            </tr>
            <br>
            <tr style="height: 23.75pt;">
                <td width="314" colspan="2" style="
              width: 230.2pt;
              border: none;
              border-bottom: solid windowtext 1pt;
              padding: 0in 5.4pt 0in 5.4pt;
              height: 13.1pt;
            ">
                    <br>
                    <p class="MsoNormal" style="text-align: justify; border: none;">
                        <sup><span style="font-size: 10pt; font-family: 'Arial', sans-serif;">Guardian Name(Last Name, First Name, Middle
                                Name)</span></sup>
                    </p>
                    <p class="MsoNormal" style="text-align: justify; border: none;">
                        <span style="font-size: 10pt; font-weight: bold; font-family: 'Arial' , sans-serif;">&nbsp;<?php echo 'Diola Ricardo M.' ?></span>
                    </p>
                </td>
            </tr>
            <tr height="0">
                <td width="327" style="border: none;"></td>
                <td width="18" style="border: none;"></td>
                <td width="313" style="border: none;"></td>
                <td width="0" style="border: none;"></td>
            </tr>
        </table>
        <p class="MsoNormal">
            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
        </p>

        <div align="center" ">
                <table
                    class=" MsoTableGrid" border="0" cellspacing="0" cellpadding="0" width="643" style="width: 482.35pt; border-collapse: collapse; border: none;">
            <tr style="height: 3.4pt;">
                <td width="102" style="
            
                width: 76.25pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 3.4pt;
              ">
                    <p class="MsoNormal" style="text-align: justify; border: none;">
                        <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">Telephone No.</span>
                    </p>
                </td>
                <td width="228" valign="top" style="
                width: 171pt;
                border: none;
                border-bottom: solid windowtext 1pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 3.4pt;
              ">
                    <p class="MsoNormal" style="text-align: justify; border: none;">
                        <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                    </p>
                </td>
                <td width="99" valign="top" style="
                width: 74.3pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 3.4pt;
              ">
                    <p class="MsoNormal" style="text-align: justify; border: none;">
                        <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">Cellphone No.</span>
                    </p>
                </td>
                <td width="214" valign="top" style="
                width: 160.8pt;
                border: none;
                border-bottom: solid windowtext 1pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 3.4pt;
              ">
                    <p class="MsoNormal" style="text-align: justify; border: none;">
                        <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            </table>
        </div>

        <p class="MsoNormal" style="text-align: justify;">
            <span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
        </p>

        <div align="center">
            <table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" width="646" style="width: 484.7pt; border-collapse: collapse; border: none;">
                <tr style="height: 15.75pt;">
                    <td width="646" colspan="7" style="
                width: 484.7pt;
                border: none;
                background: #d9e2f3;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 15.75pt;
              ">
                        <p class="MsoNormal" align="center" style="text-align: center; border: none;">
                            <b><span style="font-size: 10pt; font-family: 'Arial', sans-serif;">For Returning Learners (Balik-Aral) and Those Who Shall
                                    Transfer/Move In</span></b>
                        </p>
                    </td>
                </tr>
                <tr style="height: 9pt;">
                    <td width="646" colspan="7" style="
                width: 484.7pt;
                border: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 9pt;
              ">
                        <p class="MsoNormal" align="center" style="text-align: center; border: none;">
                            <b><span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span></b>
                        </p>
                    </td>
                </tr>
                <tr style="height: 5.2pt;">
                    <td width="198" colspan="2" valign="top" style="
                width: 148.5pt;
                border: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 5.2pt;
              ">
                        <p class="MsoNormal" style="border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">Last Grade Level Completed</span>
                        </p>
                    </td>
                    <td width="114" valign="top" style="
                width: 85.25pt;
                border: none;
                border-bottom: solid windowtext 1pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 5.2pt;
              ">
                        <p class="MsoNormal" style="border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="204" colspan="3" valign="top" style="
                width: 153.25pt;
                border: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 5.2pt;
              ">
                        <p class="MsoNormal" style="border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">Last School Year Completed</span>
                        </p>
                    </td>
                    <td width="130" valign="top" style="
                width: 97.7pt;
                border: none;
                border-bottom: solid windowtext 1pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 5.2pt;
              ">
                        <p class="MsoNormal" style="border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                </tr>
                <tr style="height: 5.2pt;">
                    <td width="516" colspan="6" valign="top" style="
                width: 387pt;
                border: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 5.2pt;
              ">
                        <p class="MsoNormal" style="border: none;">
                            <span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="130" valign="top" style="
                width: 97.7pt;
                border: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 5.2pt;
              ">
                        <p class="MsoNormal" style="border: none;">
                            <span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                </tr>
                <tr style="height: 5.15pt;">
                    <td width="120" style="
                width: 89.75pt;
                border: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 5.15pt;
              ">
                        <p class="MsoNormal" style="border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">School Name</span>
                        </p>
                    </td>
                    <td width="276" colspan="3" style="
                width: 207.25pt;
                border: none;
                border-bottom: solid windowtext 1pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 5.15pt;
              ">
                        <p class="MsoNormal" style="line-height: 150%; border: none;">
                            <span style="
                    font-size: 10pt;
                    line-height: 150%;
                    font-family: 'Arial', sans-serif;
                  ">&nbsp;</span>
                        </p>
                    </td>
                    <td width="75" valign="bottom" style="
                width: 56.05pt;
                border: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 5.15pt;
              ">
                        <p class="MsoNormal" style="line-height: 150%; border: none;">
                            <span style="
                    font-size: 10pt;
                    line-height: 150%;
                    font-family: 'Arial', sans-serif;
                  ">School ID</span>
                        </p>
                    </td>
                    <td width="176" colspan="2" style="
                width: 131.65pt;
                border: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 5.15pt;
              ">
                        <table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" style="border-collapse: collapse; border: none;">
                            <tr>
                                <td width="27" valign="top" style="
                      width: 20.05pt;
                      border: solid windowtext 1pt;
                      padding: 0in 5.4pt 0in 5.4pt;
                    ">
                                    <p class="MsoNormal" style="line-height: 150%; border: none;">
                                        <span style="
                          font-size: 10pt;
                          line-height: 150%;
                          font-family: 'Arial', sans-serif;
                        ">&nbsp;</span>
                                    </p>
                                </td>
                                <td width="27" valign="top" style="
                      width: 20.05pt;
                      border: solid windowtext 1pt;
                      border-left: none;
                      padding: 0in 5.4pt 0in 5.4pt;
                    ">
                                    <p class="MsoNormal" style="line-height: 150%; border: none;">
                                        <span style="
                          font-size: 10pt;
                          line-height: 150%;
                          font-family: 'Arial', sans-serif;
                        ">&nbsp;</span>
                                    </p>
                                </td>
                                <td width="27" valign="top" style="
                      width: 20.05pt;
                      border: solid windowtext 1pt;
                      border-left: none;
                      padding: 0in 5.4pt 0in 5.4pt;
                    ">
                                    <p class="MsoNormal" style="line-height: 150%; border: none;">
                                        <span style="
                          font-size: 10pt;
                          line-height: 150%;
                          font-family: 'Arial', sans-serif;
                        ">&nbsp;</span>
                                    </p>
                                </td>
                                <td width="27" valign="top" style="
                      width: 20.05pt;
                      border: solid windowtext 1pt;
                      border-left: none;
                      padding: 0in 5.4pt 0in 5.4pt;
                    ">
                                    <p class="MsoNormal" style="line-height: 150%; border: none;">
                                        <span style="
                          font-size: 10pt;
                          line-height: 150%;
                          font-family: 'Arial', sans-serif;
                        ">&nbsp;</span>
                                    </p>
                                </td>
                                <td width="27" valign="top" style="
                      width: 20.05pt;
                      border: solid windowtext 1pt;
                      border-left: none;
                      padding: 0in 5.4pt 0in 5.4pt;
                    ">
                                    <p class="MsoNormal" style="line-height: 150%; border: none;">
                                        <span style="
                          font-size: 10pt;
                          line-height: 150%;
                          font-family: 'Arial', sans-serif;
                        ">&nbsp;</span>
                                    </p>
                                </td>
                                <td width="27" valign="top" style="
                      width: 20.1pt;
                      border: solid windowtext 1pt;
                      border-left: none;
                      padding: 0in 5.4pt 0in 5.4pt;
                    ">
                                    <p class="MsoNormal" style="line-height: 150%; border: none;">
                                        <span style="
                          font-size: 10pt;
                          line-height: 150%;
                          font-family: 'Arial', sans-serif;
                        ">&nbsp;</span>
                                    </p>
                                </td>
                            </tr>
                        </table>
                        <p class="MsoNormal" style="line-height: 150%; border: none;"></p>
                    </td>
                </tr>
                <tr style="height: 5.15pt;">
                    <td width="120" style="
                width: 89.75pt;
                border: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 5.15pt;
              ">
                        <p class="MsoNormal" style="border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">School Address</span>
                        </p>
                    </td>
                    <td width="527" colspan="6" style="
                width: 394.95pt;
                border: none;
                border-bottom: solid windowtext 1pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 5.15pt;
              ">
                        <p class="MsoNormal" style="line-height: 150%; border: none;">
                            <span style="
                    font-size: 10pt;
                    line-height: 150%;
                    font-family: 'Arial', sans-serif;
                  ">&nbsp;</span>
                        </p>
                    </td>
                </tr>
                <tr height="0">
                    <td width="120" style="border: none;"></td>
                    <td width="78" style="border: none;"></td>
                    <td width="114" style="border: none;"></td>
                    <td width="84" style="border: none;"></td>
                    <td width="75" style="border: none;"></td>
                    <td width="45" style="border: none;"></td>
                    <td width="130" style="border: none;"></td>
                </tr>
            </table>
        </div>

        <p class="MsoNormal" style="text-align: justify;">
            <span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
        </p>

        <div align="center">
            <table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" width="646" style="width: 484.7pt; border-collapse: collapse; border: none;">
                <tr style="height: 15.75pt;">
                    <td width="646" colspan="7" style="
                width: 484.7pt;
                border: none;
                background: #d9e2f3;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 15.75pt;
              ">
                        <p class="MsoNormal" align="center" style="text-align: center; border: none;">
                            <b><span style="font-size: 10pt; font-family: 'Arial', sans-serif;">For Learners in Senior High
                                    <span style="color: black;">School</span></span></b>
                        </p>
                    </td>
                </tr>
                <tr style="height: 5.15pt;">
                    <td width="120" colspan="2" style="
                width: 89.75pt;
                border: none;
                border-right: solid windowtext 1pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 5.15pt;
              ">
                        <p class="MsoNormal" style="line-height: 115%; border: none;">
                            <span style="
                    font-size: 10pt;
                    line-height: 115%;
                    font-family: 'Arial', sans-serif;
                  ">Semester</span>
                        </p>
                    </td>
                    <td width="18" style="
                width: 13.75pt;
                border: solid windowtext 1pt;
                border-left: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 5.15pt;
              ">
                        <p class="MsoNormal" style="line-height: 115%; border: none;">
                            <span style="
                    font-size: 10pt;
                    line-height: 115%;
                    font-family: 'Arial', sans-serif;
                  ">&nbsp;</span>
                        </p>
                    </td>
                    <td width="108" valign="bottom" style="
                width: 81pt;
                border: none;
                border-right: solid windowtext 1pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 5.15pt;
              ">
                        <p class="MsoNormal" style="line-height: 115%; border: none;">
                            <span style="
                    font-size: 10pt;
                    line-height: 115%;
                    font-family: 'Arial', sans-serif;
                  ">1st Sem</span>
                        </p>
                    </td>
                    <td width="18" valign="bottom" style="
                width: 13.5pt;
                border: solid windowtext 1pt;
                border-left: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 5.15pt;
              ">
                        <p class="MsoNormal" style="line-height: 115%; border: none;">
                            <span style="
                    font-size: 10pt;
                    line-height: 115%;
                    font-family: 'Arial', sans-serif;
                  ">&nbsp;</span>
                        </p>
                    </td>
                    <td width="382" colspan="2" valign="bottom" style="
                width: 286.7pt;
                border: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 5.15pt;
              ">
                        <p class="MsoNormal" style="line-height: 115%; border: none;">
                            <span style="
                    font-size: 10pt;
                    line-height: 115%;
                    font-family: 'Arial', sans-serif;
                  ">2<sup>nd</sup> Sem</span>
                        </p>
                    </td>
                </tr>
                <tr style="height: 5.2pt;">
                    <td width="646" colspan="7" valign="top" style="
                width: 484.7pt;
                border: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 5.2pt;
              ">
                        <p class="MsoNormal" style="border: none;">
                            <span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                </tr>
                <tr style="height: 5.2pt;">
                    <td width="72" valign="top" style="
                width: 0.75in;
                border: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 5.2pt;
              ">
                        <p class="MsoNormal" style="border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">Track</span>
                        </p>
                    </td>
                    <td width="192" colspan="4" valign="top" style="
                width: 2in;
                border: none;
                border-bottom: solid windowtext 1pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 5.2pt;
              ">
                        <p class="MsoNormal" style="border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="108" valign="top" style="
                width: 81pt;
                border: none;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 5.2pt;
              ">
                        <p class="MsoNormal" style="border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">Strand (if any)</span>
                        </p>
                    </td>
                    <td width="274" valign="top" style="
                width: 205.7pt;
                border: none;
                border-bottom: solid windowtext 1pt;
                padding: 0in 5.4pt 0in 5.4pt;
                height: 5.2pt;
              ">
                        <p class="MsoNormal" style="border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                </tr>
                <tr height="0">
                    <td width="72" style="border: none;"></td>
                    <td width="48" style="border: none;"></td>
                    <td width="18" style="border: none;"></td>
                    <td width="108" style="border: none;"></td>
                    <td width="18" style="border: none;"></td>
                    <td width="108" style="border: none;"></td>
                    <td width="274" style="border: none;"></td>
                </tr>
            </table>
        </div>

        <p class="MsoNormal" style="text-align: justify;">
            <span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
        </p>

        <p class="MsoNormal" style="text-align: justify;">
            <span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
        </p>

        <p class="MsoNormal" style="text-align: justify; text-indent: 0.5in;">
            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
        </p>

        <div class="center" style="display: flex; justify-content: center; ">
            <p class="MsoNormal" style="text-align: justify; text-indent: 0.5in; width: 650px;">
                <span style="font-size: 10pt; font-family: 'Arial', sans-serif; ">I hereby certify that the above information given are true and
                    correct to the best of my knowledge and I allow the Department of
                    Education to use my child’s details to create and/or update his/her
                    learner profile in the Learner Information System. The information
                    herein shall be treated as confidential in compliance with the Data
                    Privacy Act of 2012.</span>
            </p>
        </div>



        <div style="display: flex; justify-content: center;">
            <table class="MsoTableGrid" border="0" cellspacing="0" cellpadding="0" align="left" style="
          border-collapse: collapse;
          border: none;
          margin-left: 75px;
          margin-right: 6.75pt;
        ">
                <tr>
                    <td width="336" valign="top" style="
              width: 3.5in;
              border: none;
              border-bottom: solid windowtext 1pt;
              padding: 0in 5.4pt 0in 5.4pt;
            ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="24" valign="top" style="width: 0.25in; padding: 0in 5.4pt 0in 5.4pt;">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="208" valign="top" style="
              width: 155.85pt;
              border: none;
              border-bottom: solid windowtext 1pt;
              padding: 0in 5.4pt 0in 5.4pt;
            ">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td width="336" valign="top" style="width: 3.5in; border: none; padding: 0in 5.4pt 0in 5.4pt;">
                        <p class="MsoNormal" align="center" style="text-align: center; border: none;">
                            <span style="font-size: 8pt; font-family: 'Arial', sans-serif;">Signature Over Printed Name of Parent/Guardian</span>
                        </p>
                    </td>
                    <td width="24" valign="top" style="width: 0.25in; padding: 0in 5.4pt 0in 5.4pt;">
                        <p class="MsoNormal" style="text-align: justify; border: none;">
                            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
                        </p>
                    </td>
                    <td width="208" valign="top" style="width: 155.85pt; border: none; padding: 0in 5.4pt 0in 5.4pt;">
                        <p class="MsoNormal" align="center" style="text-align: center; border: none;">
                            <span style="font-size: 8pt; font-family: 'Arial', sans-serif;">Date</span>
                        </p>
                    </td>
                </tr>
            </table>
        </div>

        <p class="MsoNormal" style="text-align: justify;">
            <span style="font-size: 10pt; font-family: 'Arial', sans-serif;">&nbsp;</span>
        </p>

        <p class="MsoNormal">
            <b><span style="font-size: 2pt; font-family: 'Arial', sans-serif;">&nbsp;</span></b>
        </p>

        <p class="Body" style="margin-bottom: 0in; line-height: normal;">
            <b><span lang="PT" style="font-family: 'Arial', sans-serif;">&nbsp;</span></b>
        </p>
    </div>
    <script>
        window.onload = function() {
            // Trigger print dialog and store the return value
            var printResult = window.print();

            // Check if the print dialog was canceled
            if (!printResult) {
                // Go back to the previous tab
                window.history.back();
            }
        };
    </script>
</body>

</html>