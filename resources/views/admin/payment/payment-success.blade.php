<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0a6ae707e3.js" crossorigin="anonymous"></script>
  </head>
    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
        a{
            text-decoration: none;
        }
      .checkmark {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      i{
        color: #9ABC66;
      }
      .profile{
        color: #9ABC66;
        font-weight: 900;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
    <body>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1>Success</h1> 
        {{-- @if(auth()->user())
        <input type="hidden" value="{{auth()->user()->id}}" name="donor_id">
        @endif --}}
        <p>We received your donation request;<br/> we'll be in touch shortly!</p>
        <a href="{{route('details.donation')}}"><p class="profile">Back to your profile <i class="far fa-arrow-alt-circle-right"></i></p></a>
      </div>
    </body>
</html>