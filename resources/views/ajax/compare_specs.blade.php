    <style type="text/css">
        .compare-table .column-1 {
            color: #dc5011;
            font-weight: bold;
            background-color: #e9eaef;
            width: 12%;
        }
    </style>    
        <div style="border-right: 2px solid black;">
            <h3 class="compare-main-title">Please enter model name or part of it</h3>
                <div class="mt-4"><span class="compare-title">Compare with </span>
                    <input class="compare-search-field" type="text" name="mobile_name" id="left_search"placeholder="{{$specifications->name}}"/>
                    <span><button type="button" onclick="mobile_name()" class="compare-search-button">Search</button></span>
                </div>
                <div class="mt-5 pt-md-2 text-center" id="left_image">
                    <img src='{{url("/images/$specifications->image_path")}}'   class="img-fluid"/><br>

                    <a href='{{url("/product/$specifications->id")}}' class="btn font-weight-bold btn-yellow btn-padding-lg btn-square font-15 ml-3 mt-5">SPECIFICATIONS</a>
                </div>
            </div>
            <table class="table table-bordered mt-5 compare-table" style="background-color: #e9eaef;">
                    <tr>
                        <td class="column-1">Body</td>
                        <td class="column-2">Technology</td>
                        <td class="column-3">{{$specifications->technology}}</td>
                         
                    </tr>
                    <tr>
                        <td class="column-1">BODY</td>
                        <td class="column-2">Dimensions</td>
                        <td class="column-3">{{$specifications->dimentions}}</td>
                         
                    </tr>

                    <tr>
                        <td class="column-1">DISPLAY</td>
                        <td class="column-2">Type</td>
                        <td class="column-3">{{$specifications->display_type}}</td>
                         
                    </tr>
                    <tr>
                        <td class="column-1">NETWORK</td>
                        <td class="column-2">Technology</td>
                        <td class="column-3">{{$specifications->display_type}}</td>
                         
                    </tr>
                    <tr>
                        <td class="column-1">BODY</td>
                        <td class="column-2">Dimensions</td>
                        <td class="column-3">164.3 x 74.6 x 8.4 mm</td>
                         
                    </tr>

                    <tr>
                        <td class="column-1">DISPLAY</td>
                        <td class="column-2">Type</td>
                        <td class="column-3">AMOLED, 1B colors, 120Hz</td>
                         
                    </tr>
                    <tr>
                        <td class="column-1">NETWORK</td>
                        <td class="column-2">Technology</td>
                        <td class="column-3">GSM / CDMA / HSPA / EVDO</td>
                         
                    </tr>
                    <tr>
                        <td class="column-1">BODY</td>
                        <td class="column-2">Dimensions</td>
                        <td class="column-3">164.3 x 74.6 x 8.4 mm</td>
                         
                    </tr>

                    <tr>
                        <td class="column-1">DISPLAY</td>
                        <td class="column-2">Type</td>
                        <td class="column-3">AMOLED, 1B colors, 120Hz</td>
                         
                    </tr>
                    <tr>
                        <td class="column-1">NETWORK</td>
                        <td class="column-2">Technology</td>
                        <td class="column-3">GSM / CDMA / HSPA / EVDO</td>
                         
                    </tr>
                    <tr>
                        <td class="column-1">BODY</td>
                        <td class="column-2">Dimensions</td>
                        <td class="column-3">164.3 x 74.6 x 8.4 mm</td>
                         
                    </tr>

                    <tr>
                        <td class="column-1">DISPLAY</td>
                        <td class="column-2">Type</td>
                        <td class="column-3">AMOLED, 1B colors, 120Hz</td>
                        
                    </tr>
                </table>
