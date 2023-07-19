#Custom SelectBox UI Replacement#

This is a UI replacement for default select boxes that leaves mobile browsers (iOS and Android) default UI intact.

##Usage##

###HTML###
    <link rel="stylesheet" href="css/sparkbox-select.css">
    
    ...
    
    <form>
      <select class="sparkbox-custom">
        <option value="the_googs">Chrome</option>
        <option value="the_faris">Safari</option>
        <option value="foxfire">Firefox</option>
        <option value="the_splora">IE 9</option>
      </select>
      <input type="submit"/>
    </form>

###JavaScript###
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script src="js/jquery.sparkbox-select.js"></script>
    <script>
      ('.sparkbox-custom').sbCustomSelect();
    </script>
    
    
##Tested in##
###Mac###
- Chrome 10
- Safari 5.0.3
- Firefox 3.6
- Firefox 4

###Windows###
- Chrome 10
- Firefox 3.6
- Firefox 4
- Opera 11
- IE 8
- IE 7
- IE 6
