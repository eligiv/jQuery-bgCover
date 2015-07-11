# jQuery-bgCover
jQuery plugin, the beautiful way to make opacity background with a lot of background options and effects
Create grid of squares that contain a lot of style effects, fast animation, full control about your animation speed.

# Features
- Choose your element, for example, form element with user registration, the jQuery bgCover take your element and cover him by background cover, the background create 3 layers, your site -> the background -> the element you chose before.
- Just imagine table element, you have there rows and columns, this script create background in advanced and quality table, the performance very high.
- Set the number of the squares that do you want in each of the rows in your background
- Set the number of the squares that do you want in each of the columns in your backgroud.
- Choose the interval of the script runtime, for example, interval with value 0.2 showing each square in the speed of 200 milliseconds, the result is beautiful effect of the background steps, and this is just an one option.
- Set the opacity of the background.
- Set one or unlimit background colors, the script support string background and array backgrounds, the result is squares background by the order of the colors in the backgrounds array, for example, if you put 3 colors, the script will run about the array, when the script detect that he is on the last color, he will return to the first automatically.
- Set the presentation of background, for now there is 3 ways: show the squares like a snake, in queue, show randomaly squares until all the squares are displayed, and the last, show by the first and the last rows in the same time.
- Set the effect that do you want to be displayed with the squere, for example, fade effect or slide down \ right or flip effect, the effect working great, very fast, very quality, in high performance.
- Set an option to see effect when the mouse over on any square, for example, flip the square back and see the first layer of the site.
- Set your chosen element in "Message Mode", it's mean that the plugin will take your element from the current position to fixed position in the center of the site, the method of the script to do that, it's to make calculator of the pixeles of the user screen the the element size, the result is 100% element in the center of the site, the user can get down or up in the site and the element will stay in is poisiton.
- Set tranistion to the Message Mode motion, it's good feature if do you want if you want to get the user's attention.
- full events inidication, on start the effects, on end, on each of the rows, on each of the column, when user click our of your element block, on user click on your element block and etc.
- You have an option to destroy the plugin effect on your element, you can do that via an object into the events.

# Get Start
The plugin have defaults value for all of the options, so it's mean that you can call him in the easy way:

````JavaScript
$("#your_element").bgCover();
````

### 1. Options

````JavaScript
$("#your_element").bgCover({
  interval          : 0.05, // The interval of the square display
  bgcolor           : [ "rgb(187, 187, 187)", "gray", "#000" ], // The background colors
  rows              : 10, // Count of the squares in each of the columns
  columns           : 8, // Count of the squares in each of the rows
  visibilityEffect  : "flip", // Show the squares in flip effects
  visibilityType    : "edges", // Show the squares in edges type
  hideInHover       : "fade", // Fade out the square when mouse hover on it
  flipAlign         : "horizontal", // Flip the squares in horizontal align
  effectDuration    : 0.3, // Show the duration effect in 300ms
  opacity           : 0.5, // Show the background in opacity of 0.5 
  effectType        : 3, // The type of the effect, for current 3 mean "ease-out"
  
  // Message mode
  messageMode       : true, // Optimize the message mode to the center of the screen
  messageEffect     : 0.5, // Show tranition effect in 500ms
  messageEffectType : 0, // Alias of effectType according to the message mode only
});
````

Background Color Property:
````JavaScript
bgcolor : [ "color 1", "color 2", "color 3", .... ] // Run about all of the colors in the array

//----------- OR ----------//

bgcolor : "color 1" // Show all of the background in one color only
````

Visibility Effect & hide In Hover Properies:

`
Possible effects: flip, fade, slideRight, slideDown
`
````JavaScript
visibilityEffect  : "slideDown",  // Slide down the square
hideInHover       : "slideRight", // Slide right the square when mouse over on it
````

Visibility Type Property:

`
Possible Types: None, Random, Edges
`
````JavaScript
visibilityType: "random", // Show the square randomaly in the page 
````

Flip Align Property:

`
Possible Aligns: horizontal, vertical
`

### 2. Events

````JavaScript
$("#your_element").bgCover({
  onStart : function( obj ) {
    // Triggered in the beginning of the effect
  },
    
  onEnd : function( obj ) {
    // Triggered in the end of the effect
  },
    
  onEachRow : function( obj ) {
    // Triggered when the script start run over new row
  },
    
  onEachColumn : function( obj ) {
    // Triggered in each of the square column
  },
    
  onClickOut : function( obj ) {
    obj.destroy(true); // destroy the effect and return to the site
        
    // Triggered when user click out of the element box
  },
    
  onClickIn : function( obj ) {
    // Triggered when user click in the element box
  }
});
````

Event Object Paramter:

`
For now, you can only use destroy method in the object paramter.

obj.destroy((boolean) effect, (boolean) removeBox, (function) callback)


`

````JavaScript
obj.destroy(true, false, function(){
  // Triggered when the effects destroy completely.
});
````
