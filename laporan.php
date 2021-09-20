<html>
    <head>
        <title>Pencarian Data Input KTP Berdasarkan Periode Tanggal</title>
        <style type="text/css">
<!--
.style4 {
	font-size: 18px;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style6 {
	font-size: 14px;
	font-style: italic;
}
-->
        </style>
</head>
    <body>
        <div>
        <?php
       include "koneksiadmin.php";
        ?>
        <form action="print.php" method="post" name="postform">
            <p align="center">&nbsp;</p>
            <p align="center" class="style4">Silahkan Cari Data Berdasarkan Periode Tanggal</p>
            <p align="center">------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
            <table border="0" align="center">
                <tr>
                    <td width="125"><b>Dari Tanggal</b></td>
                  <td colspan="2" width="190">: <input type="date" name="tanggal_awal" size="16" />
                    <a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tanggal_awal);return false;" ></a>                    </td>
                    <td width="125"><b>Sampai Tanggal</b></td>
                  <td colspan="2" width="190">: <input type="date" name="tanggal_akhir" size="16" />
                    <a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tanggal_akhir);return false;" ></a>                    </td>
                  <td colspan="2" width="190"><input type="submit" value="Print Data" name="pencarian"/>
                    <input name="reset" type="reset" value="Reset" /></td>
                    <td colspan="2" width="70">&nbsp;</td>
                </tr>
            </table>
            <p>&nbsp;</p>
            <p align="center" class="style6"><strong>Noted :</strong> Pastikan anda memasukkan data dengan benar</p>
        </form>
        <br />
</div>
</body>
</html>