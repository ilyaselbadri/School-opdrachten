<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <fieldset>
        <legend>questionnaire</legend>
        <p>What is your favorite food?</p>
        <p>
            <input type="radio" name="food" id="tacos" value="tacos">
            <label for="tacos">Tacos</label>
        </p>
        <p>
            <input type="radio" name="food" id="pizza" value="pizza">
            <label for="pizza">Pizza</label>
        </p>
        <p>
            <input type="radio" name="food" id="burgers" value="burgers">
            <label for="burgers">Burgers</label>
        </p>
        <p>
            <input type="radio" name="food" id="other" value="other">
            <label for="other">Other</label>
        </p>
    </fieldset>
    <br>
    <fieldset>
        <legend>Do you have pets?</legend>
        <p>
           <input type="checkbox" name="pets" id="dogs" value="dog"> 
           <label for="dog">Dog</label>
        </p>
        <p>
           <input type="checkbox" name="pets" id="cat" value="cat"> 
           <label for="cat">Cat</label>
        </p>
        <p>
           <input type="checkbox" name="pets" id="fish" value="fish"> 
           <label for="fish">Fish</label>
        </p>
        <p>
           <input type="checkbox" name="pets" id="bird" value="bird"> 
           <label for="bird">Bird</label>
        </p>
        <p>
           <input type="checkbox" name="pets" id="otherPet" value="otherPet"> 
           <label for="otherPet">Other</label>
        </p>
    </fieldset>
    <br>
    <fieldset>
        <legend>Send me a note</legend>
        <label for="message">Your Message:</label>
        <br>
        <textarea name="message" id="message" cols="40" rows="15" placeholder="Type your message here"></textarea>
    </fieldset>
    <br>
    <button type="submit">Submit</button>
    <button type="submit" formaction="https://httpbin.org/post" 
    formmethod="post">Post</button>
    <button type="reset">Reset</button>






    <hr>












    
</body>
</html>