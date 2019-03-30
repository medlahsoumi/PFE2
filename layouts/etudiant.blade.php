
<style>
/*
 * Copyright (c) 2012-2013 Thibaut Courouble
 * http://www.cssflow.com
 * Licensed under the MIT License
 *
 * Sass/SCSS source: https://goo.gl/UhXKg
 * PSD by Vin Thomas: https://goo.gl/n1M2e
 */

 body {
  font: 13px/20px "Lucida Grande", Tahoma, Verdana, sans-serif;
  color: #404040;
  background: #2a2a2a;
}

.container {
  margin: 60px auto;
  width: 400px;
  text-align: center;
}

.container .progress {
  margin: 0 auto;
  width: 400px;
}

.progress {
  padding: 4px;
  background: rgba(0, 0, 0, 0.25);
  border-radius: 6px;
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.25), 0 1px rgba(255, 255, 255, 0.08);
}

.progress-bar {
  height: 16px;
  border-radius: 4px;
	background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.05));
  transition: 0.4s linear;
  transition-property: width, background-color;
  box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.25), inset 0 1px rgba(255, 255, 255, 0.1);
}

/*
 * Note: using adjacent or general sibling selectors combined with
 *       pseudo classes doesn't work in Safari 5.0 and Chrome 12.
 *       See this article for more info and a potential fix:
 *       https://css-tricks.com/webkit-sibling-bug/
 */

#one:checked ~ .progress > .progress-bar {
  width: 5%;
  background-color: grey;
}

#two:checked ~ .progress > .progress-bar {
  width: 25%;
  background-color: #f27011;
}

#three:checked ~ .progress > .progress-bar {
  width: 50%;
  background-color: #f2b01e;
}

#four:checked ~ .progress > .progress-bar {
  width: 60%;
  background-color: #f2d31b;
}

#five:checked ~ .progress > .progress-bar {
  width: 75%;
  background-color: grey;
}
#six:checked ~ .progress > .progress-bar {
  width: 100%;
  background-color: grey;

.radio {
  display: none;
}
#bouga{
        display: none;
}
.label {
  display: inline-block;
  margin: 0 5px 20px;
  padding: 3px 8px;
  color: #aaa;
  text-shadow: 0 1px black;
  border-radius: 3px;
  cursor: pointer;
}

.radio:checked + .label {
  color: white;
  background: rgba(0, 0, 0, 0.25);
}


</style>
<h2>Thése en cours :</h2>
<div class="container">
        <input type="radio" class="radio" name="progress" value="one" id="one">
        <label for="one" class="label">one</label>
      
        <input type="radio" class="radio" name="progress" value="two" id="two" checked>
        <label for="twentyfive" class="label">two</label>
      
        <input type="radio" class="radio" name="progress" value="three" id="three">
        <label for="three" class="label">three</label>
      
        <input type="radio" class="radio" name="progress" value="four" id="four">
        <label for="four" class="label">four</label>
      
        <input type="radio" class="radio" name="progress" value="onehundred" id="five">
        <label for="five" class="label">five</label>
      
        <div class="progress">
          <div class="progress-bar"></div>
        </div>
      </div>
      <h2>thése dépousé :</h2>
      
      <input type="radio" name="d1" id="non">Non
     
      <button onclick="myFunction()">Click me</button>
    <form style="display:none"  id="bouga">
            <input type="radio" name="d1" onclick="if(this.checked){myFunction()}" id="oui">Oui
     <h1 id="demo">this shouldn't be seen ! </h1>
    </form> 
  
  <script>
        function myFunction(){
               
    document.getElementById("bouga").style.display="block";
        }
}
    </script>