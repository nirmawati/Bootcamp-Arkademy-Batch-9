<?php
foreach($model as $data){
    echo $data->id;
    echo $data->name;
    echo $data->region_id;
}
/* @var $this yii\web\View */
?>
<h1>Data Sensus Penduduk</h1>
<br>
<br>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
        <table class="table table-sm table-hover table-bordered-black ">
        <thead >
            <tr>
                <td><b>Nama Daerah</b></td>
                <td><b>Jumlah Penduduk</b></td>
                <td><b>Total Pendapatan</b></td>
                <td><b>Rata-rata Pendapatan</b></td>
                <td><b>Status</b></td>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
        </tbody>
    </table>
         </div>
     </div>
</div>