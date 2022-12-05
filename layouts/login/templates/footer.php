<script src="js/script.js"></script>
<script src="layouts/components/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    </body>
  </html>

  <style>
  .alertalogin {
    transform: translateY(5em);
  }
  .library-g {
    color: orangered;
  }
  p {
    font-size: 1.2em;
  }
  .pedbot {
    text-decoration: none;
    color: black;
  }
  .justify-center {
    margin-left: 35%;
  }
  body {
    background-image: linear-gradient(to right, #82D173, #ADF7B6 );
    background-color: #82D173;
  }
  input {
    height: 3em;
    box-shadow: 5px 5px 10px grey;
  }
  #p-txt {
    font-size: 0.58em;
  }
  #button {
    width: 100%;
    height: 3em;
    background-color: orangered;
  }
  #button:hover {
    transform: translateY(-0.1em);
  }
  #button_new {
    width: 50%;
    height: 3em;
    margin-left: 25%;
  }
  #button_new:hover {
    transform: translateY(-0.1em);
  }
  .divleft {
    margin-left: 3em;
    transform: translateY(50%);
    animation-duration: 3s;
    animation-name: divleft;
  }

  @keyframes divleft {
  from {
    margin-left: 30%;
    width: 100%
  }

  to {
    margin-left: 0%;
    width: 100%;
  }
}

  #col {
    height: 300px;
    border-radius: 0.5em; 
    transform: translateY(35%);
  }
  #col1 {
    width: 27em;
    height: 22em;
    background-color: #F1E9DA;
    border-radius: 0.5em; 
    transform: translateY(30%);
  }


  #icon {
    position: absolute;
    top:53%;
    right: 30px;
    background: url(images/show.png);
    background-size: cover;
    transform: translateY(-5.3em);
    width: 20px;
    height: 20px;
    cursor: pointer;
  }
  #icon.hide {
    background: url(images/hide.png);
    background-size: cover;
  }
</style>