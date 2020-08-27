<style>
  h1{
    font-size: 24px;
    font-family: sans-serif;
  }
  #input{
    margin-left:50px;
  
    font-size: 18px;
    font-family: sans-serif;
  }
  @media screen and (max-width: 800px) {
    #input{
      margin-left:30px;
      font-size:14px;

    }
  }
    @media screen and (max-width: 400px) {
    #input{
      margin-left:30px;
      font-size:14px;

    }
  }
  #btn_primary {
  border-radius: 4px;
  background-color: #007BFF;
  border: none;
  color:black;
  font-size: 18px;
  font-family: sans-serif;
  padding: 20px;
  width: 300px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

#btn_primary span {
  cursor: pointer;
  font-size: 18px;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

#btn_primary span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

#btn_primary:hover span {
  padding-right: 25px;

}

#btn_primary:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="author" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>

@extends('layouts.app')
@section('content')


<div class="container">
<div class="jumbotron jumbotron-fluid">
<form action="{{ route('contact') }}" method="post">
<h1>Skontaktuj sie z nami</h1>
{{ csrf_field() }}
<div class="container">
<div class="jumbotron">
<form action="{{route('contact')}}" method="post">
<div class="form-group">
    <label for="name">Nazwa:</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Jan Kowalski">
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="jan.kowalski@gmail.com">
  </div>
  <div class="form-group">
    <label for="subject">Temat:</label>
    <input type="text" class="form-control" id="subject" name="subject" placeholder="Temat">
  </div>
  <div class="form-group">
    <label for="message">Wiadomosc:</label>
    <textarea class="form-control" type="text"id="message" name="message" rows="4"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" id="btn_primary"><span>Wyslij email</span></button>
</form>
</form>
</div>
</div>
</body>
@endsection
</html>
