             <img src='{{url("/images/$specifications->image_path")}}' class="card-img-top mx-auto mt-4">
              
            <table class="table table-bordered mt-5">
              <tbody>
                <tr>
                  <td>Dimentions</td>
                   <td>{{$specifications->dimentions}}</td>
                </tr>
                <tr>
                  <td>Resolution</td>
                   <td>{{$specifications->resolution}}</td>
                </tr>
                <tr>
                  <td>Weight</td>
                   <td>{{$specifications->weight}}</td>
                </tr>
                <tr>
                  <td>OS</td>
                   <td>{{$specifications->os}}</td>
                </tr>
                <tr>
                  <td>Sim Support</td>
                   <td>{{$specifications->sim_support}}</td>
                </tr>
                <tr>
                  <td>Display Type</td>
                   <td>{{$specifications->display_type}}</td>
                </tr>
                <tr>
                  <td> RAM</td>
                   <td>{{$specifications->ram}}</td>
                </tr>
                
                <tr>
                  <td>Internal Memory</td>
                   <td>{{$specifications->internal_memory}}</td>
                </tr>
                 
                <tr>
                  <td> Front Camera</td>
                   <td>{{$specifications->front_camera}}</td>
                </tr>
                <tr>
                  <td>Back Camera</td>
                   <td>{{$specifications->back_camera}}</td>
                </tr>

                <tr>
                  <td>Battery</td>
                   <td>{{$specifications->battery}}</td>
                </tr>
                 
                <tr>
                  <td>Description</td>
                   <td>{{$specifications->description}}</td>
                </tr>
                 
              </tbody>
 
            </table>