<!-- main content -->
<div class="col mt-5 text-center">
    <h1>Biểu đồ thống kê: </h1>
    <div class="list_lh mt-5">
        <div id="myChart" style="width:100%; max-width:600px; height:500px;">
        </div>
        <script>
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Hàng hóa', 'CMT'],

                <?php
                $soLuongHH = count($danhsachTKHH);
                $i =1;
                foreach($danhsachTKHH as $ds) {
                    if($i == $soLuongHH) {
                        $dauPhay = "";
                    }else{
                        $dauPhay = ",";
                    }
                
                ?>["<?php echo $ds['tHangHoa'] ?>", <?php echo $ds['slBL'] ?>] <?php echo $dauPhay ?>
                <?php 
                $i+=1;
                }
                ?>

            ]);

            var options = {
                title: 'Bình luận trong một sản phẩm'
            };

            var chart = new google.visualization.PieChart(document.getElementById('myChart'));
            chart.draw(data, options);
        }
        </script>







    </div>
</div>