<!DOCTYPE html>
<html>
    <head>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="bgcover.min.js"></script>
        <script>
            $(document).ready(function() {
                var destroy = null;
                
                $("#execute").click( function(){
                    var execute = function() {
                        $("#preview").bgCover({
                            interval          : parseFloat( $("#interval").val() ),
                            bgcolor           : $("#bgcolor").val().split("|"),
                            rows              : parseInt( $("#rows").val() ),
                            columns           : parseInt( $("#columns").val() ),
                            visibilityEffect  : $("#visibilityEffect").val(),
                            visibilityType    : $("#visibilityType").val(),
                            hideInHover       : $("#hideInHover").val(),
                            flipAlign         : $("#flipAlign").val(),
                            effectDuration    : parseFloat( $("#effectDuration").val() ),
                            opacity           : parseFloat( $("#opacity").val() ),
                            effectType        : parseInt( $("#effectType").val() ),
                            
                            // Message mode
                            messageMode       : $("#messageMode").is(":checked") ? true : false,
                            messageEffect     : parseFloat( $("#messageEffect").val() ),
                            messageEffectType : parseInt( $("#messageEffectType").val() ),
                            
                            onStart : function( arg ) {
                                destroy = arg;
                            }
                        });
                    }
                    
                    if ( destroy != null ) {
                        destroy.destroy(true, false, function(){
                            execute();    
                        });
                    }
                    else execute();
                });
            });
        </script>
        <style>
            #test {
                background-color: #E2E2E2;
                width: 20%;
                /*
                margin: 10% auto;
                */
                height: 300px;
                border: 1px solid #C2C2C2;
                border-radius: 6px;
                padding: 15px;
                font-family: cursive;
                text-align: center;
                line-height: 3;
                color: #444242;
              }
              
                .table .inline {
                  display: table-cell;
                  width: 230px;
                  padding: 5px 7px;
                  font-family: sans-serif;
                  font-size: 13px;
                }
                
              .table .inline select,  .table .inline input[type='text'] {
                padding: 6px;
              }

              #preview {
                display: table;
                width: 500px;
                background-color: #EAEAEA;
                border: 1px solid #BEBEBE;
                box-shadow: 0 0 3px 1px rgba(0, 0, 0, 0.25);
              }
              
              #submit {
                text-align: center;
                padding: 16px;
                border-top: 1px solid #E0E0E0;
                margin-top: 5px;
              }
              
              #submit input {
                padding: 9px 14px;
              }
        </style>
    </head>
    <html>
        <div id='preview'>
            <div class='table'>
                <div class='inline'>
                    Interval
                </div>
                <div class='inline'>
                    <select id='interval'>
                    <?php for($i = 0; $i <= 2; $i+=0.01) : ?>
                    <option value='<?=$i ?>'><?=$i ?></option>
                    <?php endfor; ?>
                    </select>
                </div>
            </div>
            <div class='table'>
                <div class='inline'>
                    Background Color
                </div>
                <div class='inline'>
                    <input type='text' value='rgb(187, 187, 187)|gray|#000' id='bgcolor' />
                </div>
            </div>
            <div class='table'>
                <div class='inline'>
                    Rows
                </div>
                <div class='inline'>
                    <select id='rows'>
                    <?php for($i = 1; $i <= 30; $i++) : ?>
                    <option value='<?=$i ?>'><?=$i ?></option>
                    <?php endfor; ?>
                    </select>
                </div>
            </div>
            <div class='table'>
                <div class='inline'>
                    Columns
                </div>
                <div class='inline'>
                    <select id='columns'>
                    <?php for($i = 1; $i <= 30; $i++) : ?>
                    <option value='<?=$i ?>'><?=$i ?></option>
                    <?php endfor; ?>
                    </select>
                </div>
            </div>
            <div class='table'>
                <div class='inline'>
                    Opacity
                </div>
                <div class='inline'>
                    <select id='opacity'>
                    <?php for($a = 0; $a < 0.9; $a+=0.1) : ?>
                    <option value='<?=$a ?>'><?=$a ?></option>
                    <?php endfor; ?>
                    <option value='1' selected>1</option>
                    </select>
                </div>
            </div>
            <div class='table'>
                <div class='inline'>
                    Effect Duration
                </div>
                <div class='inline'>
                    <select id='effectDuration'>
                    <?php for($is = 0; $is <= 2; $is += 0.1) : ?>
                    <option value='<?php echo $is; ?>'><?php echo $is; ?></option>
                    <?php endfor; ?>
                    </select>
                </div>
            </div>
            <div class='table'>
                <div class='inline'>
                    Effect Type
                </div>
                <div class='inline'>
                    <select id='effectType'>
                    <option value='0'>ease</option>
                    <option value='1'>linear</option>
                    <option value='2'>ease-in</option>
                    <option value='3'>ease-out</option>
                    <option value='4'>ease-in-out</option>
                    </select>
                </div>
            </div>
            <div class='table'>
                <div class='inline'>
                    Visibility Effect
                </div>
                <div class='inline'>
                    <select id='visibilityEffect'>
                    <option value='flip'>flip</option>
                    <option value='fade'>fade</option>
                    <option value='slideRight'>slideRight</option>
                    <option value='slideDown'>slideDown</option>
                    </select>
                </div>
            </div>
            <div class='table'>
                <div class='inline'>
                    Flip Align
                </div>
                <div class='inline'>
                    <select id='flipAlign'>
                    <option value='vertical'>Vertical</option>
                    <option value='horizontal'>Horizontal</option>
                    </select>
                </div>
            </div>
            <div class='table'>
                <div class='inline'>
                    Visibility Type
                </div>
                <div class='inline'>
                    <select id='visibilityType'>
                    <option value=''>Select...</option>
                    <option value='random'>Random</option>
                    <option value='edges'>Edges</option>
                    </select>
                </div>
            </div>
            <div class='table'>
                <div class='inline'>
                    Hide In Hover
                </div>
                <div class='inline'>
                    <select id='hideInHover'>
                    <option value=''>Select...</option>
                    <option value='flip'>flip</option>
                    <option value='fade'>fade</option>
                    <option value='slideRight'>slideRight</option>
                    <option value='slideDown'>slideDown</option>
                    </select>
                </div>
            </div>
            <div class='table'>
                <div class='inline'>
                    Message Mode
                </div>
                <div class='inline'>
                    <input type='checkbox' id='messageMode' checked />
                </div>
            </div>
            <div class='table'>
                <div class='inline'>
                    Message Effect
                </div>
                <div class='inline'>
                    <select id='messageEffect'>
                    <?php for($i = 0; $i <= 2; $i+=0.01) : ?>
                    <option value='<?=$i ?>'><?=$i ?></option>
                    <?php endfor; ?>
                    </select>
                </div>
            </div>
            <div class='table'>
                <div class='inline'>
                    Message Effect Type
                </div>
                <div class='inline'>
                    <select id='messageEffectType'>
                    <option value='flip'>flip</option>
                    <option value='fade'>fade</option>
                    <option value='slideRight'>slideRight</option>
                    <option value='slideDown'>slideDown</option>
                    </select>
                </div>
            </div>
            <div id='submit'>
                <input type='button' value='Execute' id='execute' />
            </div>
        </div>
    </html>
</html>
