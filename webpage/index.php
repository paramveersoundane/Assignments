<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>trial</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container">
        <div class="hder">
            <div class="row">
                <span class="collumn1">
                    <label for="email">Email</label> <input type="text" name="email" id="email" placeholder="Enter your email"></span>
                <span class="collumn2">
                    <label for="pwds">Password</label> <input type="password" name="pwds" id="pwds" placeholder="Enter your secret Password"></span>
                <span class="collumn3"><input type="submit" value="Login"></span>
            </div>


        </div>

        <div class="middle_container">
            <div class="rowgroup1">
                <h3 style="grid-row: 1/2; grid-column: 1/2; margin-left:1em;">Category</h3>
                <select name="Category" style="grid-row: 2/3; grid-column: 1/2; margin-left:1em;">
                    <option value="check" >check all</option>
                    <option value="SELECT" >uncheck all</option>
                    <option value="none" disabled>-------------------------</option>
                    <option value="chemical">Chemical</option>
                  </select>
                <h3 style="grid-row: 1/2; grid-column: 2/3;margin-left:1em;">Sub Category</h3>
                <select name="Sub Category" style="grid-row: 2/3; grid-column: 2/3;margin-left:1em;">
                    <option value="check">check all</option>
                    <option value="SELECT">uncheck all</option>
                  </select>
                <h3 style="grid-row: 1/2; grid-column: 3/4;margin-left:1em;">Secondary Sub-Category</h3>
                <select name="Secondary Sub-Category" style="grid-row: 2/3; grid-column: 3/4;margin-left:1em;">
                    <option value=NULL>check all</option>
                    <option value="SELECT">uncheck all</option>
                  </select>
                <h3 style="grid-row: 1/2; grid-column: 4/5;margin-left:1em;">Tertiary Sub-Category</h3>
                <select name="Tertiary Sub-Category" style="grid-row: 2/3; grid-column: 4/5;margin-left:1em;">
                    <option value="check">check all</option>
                    <option value="SELECT">uncheck all</option>
                  </select>
            </div>
            <div class="rowgroup2">
                <h3 style="grid-row: 1/2; grid-column: 1/2; margin-left:1em;">Country</h3>
                <select name="Country" style="grid-row: 2/3; grid-column: 1/2; margin-left:1em;">
                        <option value="check">check all</option>
                        <option value="SELECT">uncheck all</option>
                        
                      </select>
                <h3 style="grid-row: 1/2; grid-column: 2/3;margin-left:1em;">State</h3>
                <select name="State" style="grid-row: 2/3; grid-column: 2/3;margin-left:1em;">
                        <option value="check">check all</option>
                        <option value="SELECT">uncheck all</option>
                      </select>
                <h3 style="grid-row: 1/2; grid-column: 3/4;margin-left:1em;">City</h3>
                <select name="City" style="grid-row: 2/3; grid-column: 3/4;margin-left:1em;">
                        <option value=NULL>check all</option>
                        <option value="SELECT">uncheck all</option>
                      </select>
            </div>
            <div class="rowgroup3">
                <h3 style="grid-row: 1/2; grid-column: 1/2; margin-left:1em;">Industry</h3>
                <select name="Industry" style="grid-row: 2/3; grid-column: 1/2; margin-left:1em;">
                            <option value="check">check all</option>
                            <option value="SELECT">uncheck all</option>
                            
                          </select>
                <h3 style="grid-row: 1/2; grid-column: 2/3;margin-left:1em;">Item type</h3>
                <select name="Item type" style="grid-row: 2/3; grid-column: 2/3;margin-left:1em;">
                            <option value="check">check all</option>
                            <option value="SELECT">uncheck all</option>
                          </select>
            </div>
            <div class="content">
                <h5 style="grid-column: 1/2; ">ID <input type="text" name="id"></h5>
                <h5 style="grid-column: 2/3;">Title<input type="text" name="id"></h5>
                <h5 style="grid-column: 3/4;">Description<input type="text" name="id"></h5>
                <h5 style="grid-column: 4/5;">Category tree<input type="text" name="id"></h5>
                <h5 style="grid-column: 5/6;">Available Quantity<input type="text" name="id"></h5>
                <h5 style="grid-column: 6/7;">Unit of Measure<input type="text" name="id"></h5>
                <h5 style="grid-column: 7/8;">Unit Price<input type="text" name="id"></h5>
                <h5 style="grid-column: 8/9;">Currency<input type="text" name="id"></h5>
                <h5 style="grid-column: 9/10;">Supplier<input type="text" name="id"></h5>

            </div>

        </div>
    </div>

</body>

</html>
