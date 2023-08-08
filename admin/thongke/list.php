

                <div class="row1 formtitle">
                    <h1>DANH SÁCH THỐNG KÊ</h1>
                </div>
                <div class="row1 formcontent ">
                    <div class="row1 mb10 formdsloai"> 
                      <table>
                        <tr>
                            <th>Mã Danh Mục</th>
                            <th>Tên Danh Mục</th>
                            <th>Số Lượng</th>
                            <th>Giá Cao Nhất</th>
                            <th>Giá Thấp Nhất</th>
                            <th>Giá Trung Bình</th>
                            <th></th>
                        </tr>

                        <?php 
                        foreach ($list_thongke as $thongke) {
                            extract($thongke);
                            echo ' <tr>
                            
                            <th>'.$maloai.'</th>
                            <th>'.$tenloai.'</th>
                            <th>'.$countpr.'</th>
                            <th>'.$maxprice.'</th>
                            <th>'.$minprice.'</th>
                            <th>'.$avgprice.'</th>
                            <th></th>
                        </tr>';
                        }
                        ?>                
                      </table>
                            <div id="piechart"></div>
                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                            <script type="text/javascript">
                            // Load google charts
                            google.charts.load('current', {'packages':['corechart']});
                            google.charts.setOnLoadCallback(drawChart);
                            // Draw the chart and set the chart values
                            function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                                ['Danh Mục', 'Số Lượng Sản Phẩm'],
                                <?php
                                $tongloai =count($list_thongke);
                                $i = 1;
                                    foreach ($list_thongke as $thongke) {
                                        extract($thongke);
                                        if($i==$tongloai) $dauphay =""; else $dauphay =",";
                                        echo " ['".$thongke['tenloai']."',".$thongke['countpr']."]".$dauphay;
                                         $i+=1;
                                    }
                                    ?>                   
                            ]);

                            // Optional; add a title and set the width and height of the chart
                            var options = {'title':'Thống kê sản phẩm theo danh mục', 'width':1100, 'height':800};

                            // Display the chart inside the <div> element with id="piechart"
                            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                            chart.draw(data, options);
                            }
                            </script>
                            </div>                   
                         </div>
            </form>
</body>
</html> 
