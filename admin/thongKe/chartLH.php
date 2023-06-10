<!-- main content -->
<div class="col mt-5 text-center">
    <h1>Biểu đồ thống kê:</h1>
    <div class="list_lh mt-5">



        <div id="myChart" style="width:100%; max-width:600px; height:500px;"></div>


        <script>
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Loại hàng', 'số lượng'],
                <?php
                $soLuongLH = count($danhsachTKLH);
                $i =1;
                foreach($danhsachTKLH as $ds) {
                    if($i == $soLuongLH) {
                        $dauPhay = "";
                    }else{
                        $dauPhay = ",";
                    }
                
                ?>["<?php echo $ds['tLoai'] ?>", <?php echo $ds['slHH'] ?>] <?php echo $dauPhay ?>
                <?php 
                $i+=1;
                }
                ?>

            ]);

            var options = {
                title: 'Thông kê số lượng hàng hóa trong mỗi loại:'
            };

            var chart = new google.visualization.BarChart(document.getElementById('myChart'));
            chart.draw(data, options);
        }
        </script>
    </div>








</div>
</div>