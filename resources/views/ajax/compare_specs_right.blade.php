            <style type="text/css">
                .compare-table .column-1 {
                    color: #dc5011;
                    font-weight: bold;
                    background-color: #e9eaef;
                    width: 12%;
                }
                .table-bordered td, .table-bordered th {
                    border: 1px solid #a8aeb3;
                    }
        </style>    
            <h3 class="compare-main-title mt-5">Please enter model name or part of it</h3>
                <div class="mt-4"><span class="compare-title">Compare with </span>
                    <input class="compare-search-field" type="text" name="mobile_name" id="right_search"placeholder="{{$specifications->name}}"/>
                    <span><button type="button" onclick="compare_mobile()" class="compare-search-button">Search</button></span>
                </div>
                <div class="mt-5 pt-md-2 text-center" id="left_image">
                    <img src='{{url("/images/$specifications->image_path")}}'   class="img-fluid"/><br>

                    <a href='{{url("/product/$specifications->id")}}' class="btn font-weight-bold btn-yellow btn-padding-lg btn-square font-15 ml-3 mt-5">SPECIFICATIONS</a>
                </div>
            <table class="table table-bordered mt-5 compare-table" style="background-color: #e9eaef;">
                    <tr>
                        <td class="column-1" rowspan="7">Display</td>
                        <td class="column-2">Display type</td>
                        <td class="column-3">{{$specifications->technology}}</td>
                         
                    </tr>
                    <tr>
                        
                        <td class="column-2">TP Technology</td>
                        <td class="column-3">{{$specifications->dimentions}}</td>
                         
                    </tr>

                    <tr>
                         
                        <td class="column-2">Display Size (inches)</td>
                        <td class="column-3">{{$specifications->display_type}}</td>
                         
                    </tr>
                    <tr>
                         
                        <td class="column-2">Display Ratio</td>
                        <td class="column-3">{{$specifications->display_type}}</td>
                         
                    </tr>
                    <tr>
                         
                        <td class="column-2">Screen Resolution (Pixels)</td>
                        <td class="column-3">164.3 x 74.6 x 8.4 mm</td>
                         
                    </tr>

                    <tr>
                         
                        <td class="column-2">PPI</td>
                        <td class="column-3">AMOLED, 1B colors, 120Hz</td>
                         
                    </tr>
                    <tr>
                         
                        <td class="column-2">TP Multitouch (Two/Three/Five/Ten)</td>
                        <td class="column-3">GSM / CDMA / HSPA / EVDO</td>
                         
                    </tr>
                    <tr>
                        <td class="column-1" rowspan="4">Memory</td>
                        <td class="column-2">RAM</td>
                        <td class="column-3">164.3 x 74.6 x 8.4 mm</td>
                         
                    </tr>

                    <tr>
                         
                        <td class="column-2">ROM</td>
                        <td class="column-3">AMOLED, 1B colors, 120Hz</td>
                         
                    </tr>
                    <tr>
                         
                        <td class="column-2">Memory Technology </td>
                        <td class="column-3">GSM / CDMA / HSPA / EVDO</td>
                         
                    </tr>
                    <tr>
                         
                        <td class="column-2">External Memory support</td>
                        <td class="column-3">164.3 x 74.6 x 8.4 mm</td>
                         
                    </tr>

                    <tr>
                        <td class="column-1" rowspan="2">Build Material</td>
                        <td class="column-2">Frame</td>
                        <td class="column-3">AMOLED, 1B colors, 120Hz</td>
                        
                    </tr>
                    <tr>
                        
                        <td class="column-2">Back Cover</td>
                        <td class="column-3">AMOLED, 1B colors, 120Hz</td>
                        
                    </tr>
                     <tr>
                        <td class="column-1" rowspan="2">Dimension & Weight</td>
                        <td class="column-2">Size (HxWxD in mm)</td>
                        <td class="column-3">AMOLED, 1B colors, 120Hz</td>
                        
                    </tr>
                    <tr>
                        
                        <td class="column-2">Weight with battery (gm)</td>
                        <td class="column-3">AMOLED, 1B colors, 120Hz</td>
                        
                    </tr>
                     <tr>
                        <td class="column-1" rowspan="3">Chipset</td>
                        <td class="column-2">Chipset</td>
                        <td class="column-3">AMOLED, 1B colors</td>
                        
                    </tr>
                    <tr>
                        
                        <td class="column-2">CPU Architecture</td>
                        <td class="column-3">AMOLED, 1B colors</td>
                        
                    </tr>
                    <tr>
                        
                        <td class="column-2">GPU Architecture</td>
                        <td class="column-3">AMOLED, 1B colors</td>
                        
                    </tr>


                    <tr>
                        <td class="column-1" rowspan="3">Rear Camera</td>
                        <td class="column-2">Rear Camera (pixels)</td>
                        <td class="column-3">AMOLED, 1B colors</td>
                        
                    </tr>
                    <tr>
                        
                        <td class="column-2">flashlight qty</td>
                        <td class="column-3">AMOLED, 1B colors</td>
                        
                    </tr>
                    <tr>
                        
                        <td class="column-2">Video Recorder</td>
                        <td class="column-3">AMOLED, 1B colors</td>
                        
                    </tr>


                    <tr>
                        <td class="column-1" rowspan="5">Front Camera</td>
                        <td class="column-2">Front Camera(pixels )</td>
                        <td class="column-3">AMOLED, 1B colors</td>
                        
                    </tr>
                    <tr>
                        
                        <td class="column-2">Auto Focus(PDAF)</td>
                        <td class="column-3">AMOLED, 1B colors</td>
                        
                    </tr>
                    <tr>
                        
                        <td class="column-2">Sensor Size(1/X inch)</td>
                        <td class="column-3">AMOLED, 1B colors</td>
                        
                    </tr>
                    <tr>
                        
                        <td class="column-2">Aperture</td>
                        <td class="column-3">AMOLED, 1B colors</td>
                        
                    </tr>
                    <tr>
                        
                        <td class="column-2">Video Recorder(1080P@60fps)</td>
                        <td class="column-3">AMOLED, 1B colors</td>
                        
                    </tr>

                    <tr>
                        <td class="column-1">Sensors</td>
                        <td class="column-2" colspan="2">GPS , A-GPS ,  G-sensor , Magnetometer (Geomagnetic) , Accelerometer ,Distance sensor , Proximity , Fingerprint</td>
                        
                    </tr>

                    <tr>
                        <td class="column-1" rowspan="2">Security</td>
                        <td class="column-2">Finger Print</td>
                        <td class="column-3">Yes</td>
                        
                    </tr>
                    <tr>
                        
                        <td class="column-2">Face Unlock</td>
                        <td class="column-3">No</td>
                        
                    </tr>

                    <tr>
                        <td class="column-1" rowspan="5">Battery</td>
                        <td class="column-2">Battery Capacity (mAh)</td>
                        <td class="column-3">5000mAh</td>
                        
                    </tr>

                     <tr>
                        
                        <td class="column-2">Battery Charging Rated Voltage</td>
                        <td class="column-3">3.45V-4.4V Polymer Lithium ion</td>
                        
                    </tr>
                     <tr>
                        
                        <td class="column-2">Standby Time</td>
                        <td class="column-3">about 135H</td>
                        
                    </tr>
                    <tr>
                        
                        <td class="column-2">Talk Time</td>
                        <td class="column-3">about 100H</td>
                        
                    </tr>
                    <tr>
                        
                        <td class="column-2">Video Streaming/Music</td>
                        <td class="column-3">about 13H</td>
                        
                    </tr>



                     <tr>
                        <td class="column-1" rowspan="5">Charger</td>
                        <td class="column-2">fast charge</td>
                        <td class="column-3">Yes</td>
                        
                    </tr>

                     <tr>
                        
                        <td class="column-2">AC Input (V)</td>
                        <td class="column-3">220AC</td>
                        
                    </tr>
                     <tr>
                        
                        <td class="column-2">Output Voltage (V)</td>
                        <td class="column-3">5VDC</td>
                        
                    </tr>
                    <tr>
                        
                        <td class="column-2">Output Current (A)</td>
                        <td class="column-3">2A</td>
                        
                    </tr>
                    <tr>
                        
                        <td class="column-2">Charging time</td>
                        <td class="column-3">Around 3h 22m</td>
                        
                    </tr>

                    <tr>
                        <td class="column-1">USB/HDMI/MHL</td>
                        <td class="column-2">USB Type</td>
                        <td class="column-3">TYPE-C </td>
                        
                    </tr>
                    <tr>
                        <td class="column-1">Feature</td>
                        <td class="column-2" colspan="2"> Face-unlock, Fingerprint , GPS , A-GPS ,  G-sensor , Magnetometer (Geomagnetic) , Accelerometer , Distance sensor , Proximity </td> 
                        
                    </tr>
                     <tr>
                        <td class="column-1" rowspan="2">Audio</td>
                        <td class="column-2">Audio Jack</td>
                        <td class="column-3">3.5mm </td>
                        
                    </tr>
                     <tr>
                        
                        <td class="column-2">mic qty</td>
                        <td class="column-3">1</td>
                        
                    </tr>

                    <tr>
                        <td class="column-1" rowspan="2">SIM</td>
                        <td class="column-2">SIM 1 Card type</td>
                        <td class="column-3">Nano  SIM </td>
                        
                    </tr>
                     <tr>
                        
                        <td class="column-2">SIM 2 Card type</td>
                        <td class="column-3">Nano  SIM</td>
                        
                    </tr>

                     <tr>
                        <td class="column-1" rowspan="9">Wireless</td>
                        <td class="column-2">SIM 1 Support</td>
                        <td class="column-3">GSM WCDMA LTE </td>
                        
                    </tr>
                     <tr>
                        
                        <td class="column-2">SIM 2 Support</td>
                        <td class="column-3">Same as the SIM1</td>
                        
                    </tr>
                     <tr>
                        
                        <td class="column-2">GPS/AGPS</td>
                        <td class="column-3">Same as the SIM1</td>
                        
                    </tr>
                    <tr>
                        
                        <td class="column-2">Bluetooth (class/version)</td>
                        <td class="column-3">5.0</td>
                        
                    </tr>
                     <tr>
                        
                        <td class="column-2">WiFi (2.4 GHz)</td>
                        <td class="column-3">Yes, b/g/n</td>
                        
                    </tr>
                    <tr>
                        
                        <td class="column-2">WiFi (5 GHz)</td>
                        <td class="column-3">Yes, a/n/ac</td>
                        
                    </tr>
                     <tr>
                        
                        <td class="column-2">WiFi Security</td>
                        <td class="column-3">Yes</td>
                        
                    </tr>
                    <tr>
                        
                        <td class="column-2">WiFi Hotspot</td>
                        <td class="column-3">Yes</td>
                        
                    </tr>
                     <tr>
                        
                        <td class="column-2">Screen Cast</td>
                        <td class="column-3">Yes</td>
                        
                    </tr>

                    <tr>
                        <td class="column-1" rowspan="7">Multimedia</td>
                        <td class="column-2">FM</td>
                        <td class="column-3">Yes</td>
                        
                    </tr>
                     <tr>
                        
                        <td class="column-2">FM Recorder</td>
                        <td class="column-3">Yes</td>
                        
                    </tr>
                     <tr>
                        
                        <td class="column-2">Music Player</td>
                        <td class="column-3">Yes</td>
                        
                    </tr>
                    <tr>
                        
                        <td class="column-2">Sound Recorder</td>
                        <td class="column-3">Yes</td>
                        
                    </tr>
                     <tr>
                        
                        <td class="column-2">Video Player</td>
                        <td class="column-3">Yes</td>
                        
                    </tr>
                    <tr>
                        
                        <td class="column-2">Video Player formats</td>
                        <td class="column-3">MP4/3GP/AVI/H.264 </td>
                        
                    </tr>
                     <tr>
                        
                        <td class="column-2">Audio Player Formats</td>
                        <td class="column-3">Amr , MP3, WAV</td>
                        
                    </tr>
                      

                </table>