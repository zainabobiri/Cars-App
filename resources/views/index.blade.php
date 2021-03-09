<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Car publication</title>
</head>
<body>
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-6">
                  <form action="{{url('/store')}}" method="post">
                    @csrf
                      <div class="row form-group">
                          <div class="col-md-12">
                              <label for=" ">Make:</label>
                              <input type="text" name="make" class="form-control" required >
                            </div>
                      </div>
                      <div class="row form-group">
                        <div class="col-md-12">
                            <label for=" ">Model no:</label>
                            <input type="text" name="modelno" class="form-control" required >
                          </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for=" ">produced on:</label>
                            <input type="date" name="producedon" class="form-control" required >
                          </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success float-right">Create</button>

                        </div>
                    </div>
                  </form>

              </div>
              <div class="col-md-6">
                 <table class="table table-striped table-hover">
                     <tr>  
                         <th>Make</th>
                         <th>Model</th>
                         <th>Produced on</th>
                     </tr>
                     <td></td>
                     <td></td>
                     <td></td>
                 </table>

              </div>
          </div>
      </div>
</body>
</html>