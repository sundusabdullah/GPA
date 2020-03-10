<!-- https://academicanswers.waldenu.edu/faq/73219 -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Simple CMS" />
    <meta name="author" content="Sheikh Heera" />

    <title>GPA</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
</head>
<body>





<form class="container pt-5" method="post">
@csrf
    <!-- Grade_1 -->
    <div class="form-inline form-group">
        <div class="form-group mb-2">
            <input type="text" size="60" class="form-control  ml-5" name="time_1" placeholder="Credits" required>
        </div>
        <div class="form-group pl-3 pb-2">
            <select class="form-control " name="grade_1" required>
                <option value="">Grade</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="F">F</option>
            </select>
        </div>
    </div>
    <!-- end of Grade_1 -->

    <!-- Grade_2 -->
    <div class="form-inline form-group">
        <div class="form-group mb-2">
            <input type="text" size="60" class="form-control ml-5" name="time_2" placeholder="Credits" required>
        </div>

        <div class="form-group pl-3 pb-2">
            <select class="form-control " name="grade_2" required>
                <option value="">Grade</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="F">F</option>
            </select>
        </div>
    </div>
    <!-- end of Grade_1 -->

    <!-- Grade_3 -->
    <div class="form-inline form-group">

        <div class="form-group mb-2">
            <input type="text" size="60" class="form-control ml-5" name="time_3" placeholder="Credits" required>
        </div>

        <div class="form-group pl-3 pb-2">
            <select class="form-control" name="grade_3" required>
                <option value="">Grade</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="F">F</option>
            </select>
        </div>
    </div>
 <!-- end of Grade_3 -->

    <!-- Grade_4 -->
    <div class="form-inline form-group">

        <div class="form-group mb-2">
            <input type="text" size="60" class="form-control ml-5" name="time_4" placeholder="Credits" required>
        </div>

        <div class="form-group pl-3 pb-2">
            <select class="form-control " name="grade_4" required>
                <option value="">Grade</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="F">F</option>
            </select>
        </div>
    </div>
 <!-- end of Grade_4 -->

    <!-- Grade_5 -->
    <div class="form-inline form-group">

        <div class="form-group mb-2">
            <input type="text" size="60" class="form-control ml-5" name="time_5" placeholder="Credits" required>
        </div>

        <div class="form-group pl-3 pb-2">
            <select class="form-control " name="grade_5" required>
                <option value="">Grade</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="F">F</option>
            </select>
        </div>
    </div>

 <!-- end of Grade_5 -->

    <!-- Grade_6 -->
    <div class="form-inline form-group">

        <div class="form-group mb-2">
            <input type="text" size="60" class="form-control ml-5" name="time_6" placeholder="Credits" required>
        </div>

        <div class="form-group pl-3 pb-2">
            <select class="form-control " name="grade_6" required>
                <option value="">Grade</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="F">F</option>
            </select>
        </div>
    </div>
 <!-- end of Grade_6 -->


@if(!empty($Total))
      <div class="alert alert-info">
      GPA =  <label name="result" > {{ $Total }} </label>
      </div>
@endif


<div class="container pt-4">
    <button name="calculate" class="btn btn-primary btn-lg btn-block">Calculate</button>
</div>
</form>






<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>