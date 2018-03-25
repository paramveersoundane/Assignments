<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>trial</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container">
        <div class="hder">
            <h1 style="position: absolute;color: black;left: 10%;top: 12%;">Suppliers Cave</h1>
            <div class="row">
                <span class="collumn1">
                    <label for="email">Email</label> <input type="text" name="email" id="email" placeholder="Enter your email"></span>
                <span class="collumn2">
                    <label for="pwds">Password</label> <input type="password" name="pwds" id="pwds" placeholder="Enter your secret Password"></span>
                <span class="collumn3"><input type="submit" value="Login"></span>
            </div>


        </div>

        <div class="middle_container">
            <div style="background-color: yellow; padding-bottom: 2%;width: 12%;height: 11%;top: 7%;left: 0%;padding-left: 3%;position: relative;">
                <h2>Category Classification</h2>
            </div>

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
            <div style="position: relative;background-color: yellow;top: 3%;padding: 1px 4% 1px 2%;width: 6%;">
                <h2>Location</h2>
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
            <div style="width: 14%;background-color: yellow;position: relative;top: -6%;">
                <h2>Additional Filters</h2>
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
            <div style="top: -26%;position: relative;left: 78%;">
                <input type="submit" value="Clear">
                <input type="submit" value="APPLY"></div>
            <div class="content">
                <table border="1">
                    <tr>
                        <td style="grid-column: 1/2; ">
                            <h5>ID <input type="text" name="id"></h5>
                        </td>
                        <td style="grid-column: 2/3;">
                            <h5>Title<input type="text" name="id"></h5>
                        </td>
                        <td style="grid-column: 3/4;">
                            <h5>Description<input type="text" name="id"></h5>
                        </td>
                        <td style="grid-column: 4/5;">
                            <h5>Category tree<input type="text" name="id"></h5>
                        </td>
                        <td style="grid-column: 5/6;">
                            <h5>Available Quantity<input type="text" name="id"></h5>
                        </td>
                        <td style="grid-column: 6/7;">
                            <h5>Unit of Measure<input type="text" name="id"></h5>
                        </td>
                        <td style="grid-column: 7/8;">
                            <h5>Unit Price<input type="text" name="id"></h5>
                        </td>
                        <td style="grid-column: 8/9;">
                            <h5>Currency<input type="text" name="id"></h5>
                        </td>
                        <td style="grid-column: 9/10;">
                            <h5>Supplier<input type="text" name="id"></h5>
                        </td>
                    </tr>
                    <tr style="grid-column:1/10; grid-row: 2/3;">
                        <td><label for="id">id</label></td>
                        <td><label for="Title">title</label></td>
                        <td><label for="description">description</label></td>
                        <td><label for="category item">Category item</label></td>
                        <td><label for="Available quantity">available quantity</label></td>
                        <td><label for="unit of measure">centimetre</label></td>
                        <td><label for="unit price">price</label></td>
                        <td><label for="currency">rupees</label></td>
                        <td><label for="supplier">supplier</label></td>
                    </tr>
                    <tr style="grid-column:1/10; grid-row: 3/4;">
                        <td><label for="id">Id</label></td>
                        <td><label for="Title">title</label></td>
                        <td><label for="description">description</label></td>
                        <td><label for="category item">Category item</label></td>
                        <td><label for="Available quantity">available quantity</label></td>
                        <td><label for="unit of measure">centimetre</label></td>
                        <td><label for="unit price">price</label></td>
                        <td><label for="currency">rupees</label></td>
                        <td><label for="supplier">supplier</label></td>
                    </tr>
                    <tr style="grid-column:1/10; grid-row: 4/5;">
                        <td><label for="id">Id</label></td>
                        <td><label for="Title">title</label></td>
                        <td><label for="description">description</label></td>
                        <td><label for="category item">Category item</label></td>
                        <td><label for="Available quantity">available quantity</label></td>
                        <td><label for="unit of measure">centimetre</label></td>
                        <td><label for="unit price">price</label></td>
                        <td><label for="currency">rupees</label></td>
                        <td><label for="supplier">supplier</label></td>
                    </tr>
                    <tr style="grid-column:1/10; grid-row: 5/6;">
                        <td><label for="id">Id</label></td>
                        <td><label for="Title">title</label></td>
                        <td><label for="description">description</label></td>
                        <td><label for="category item">Category item</label></td>
                        <td><label for="Available quantity">available quantity</label></td>
                        <td><label for="unit of measure">centimetre</label></td>
                        <td><label for="unit price">price</label></td>
                        <td><label for="currency">rupees</label></td>
                        <td><label for="supplier">supplier</label></td>
                    </tr>
                    <tr style="grid-column:1/10; grid-row: 6/7;">
                        <td><label for="id">Id</label></td>
                        <td><label for="Title">title</label></td>
                        <td><label for="description">description</label></td>
                        <td><label for="category item">Category item</label></td>
                        <td><label for="Available quantity">available quantity</label></td>
                        <td><label for="unit of measure">centimetre</label></td>
                        <td><label for="unit price">price</label></td>
                        <td><label for="currency">rupees</label></td>
                        <td><label for="supplier">supplier</label></td>
                    </tr>
                    <tr style="grid-column:1/10; grid-row: 7/8;">
                        <td><label for="id">Id</label></td>
                        <td><label for="Title">title</label></td>
                        <td><label for="description">description</label></td>
                        <td><label for="category item">Category item</label></td>
                        <td><label for="Available quantity">available quantity</label></td>
                        <td><label for="unit of measure">centimetre</label></td>
                        <td><label for="unit price">price</label></td>
                        <td><label for="currency">rupees</label></td>
                        <td><label for="supplier">supplier</label></td>
                    </tr>
                    <tr style="grid-column:1/10; grid-row: 8/9;">
                        <td><label for="id">Id</label></td>
                        <td><label for="Title">title</label></td>
                        <td><label for="description">description</label></td>
                        <td><label for="category item">Category item</label></td>
                        <td><label for="Available quantity">available quantity</label></td>
                        <td><label for="unit of measure">centimetre</label></td>
                        <td><label for="unit price">price</label></td>
                        <td><label for="currency">rupees</label></td>
                        <td><label for="supplier">supplier</label></td>
                    </tr>
                    <tr style="grid-column:1/10; grid-row: 9/10;">
                        <td><label for="id">Id</label></td>
                        <td><label for="Title">title</label></td>
                        <td><label for="description">description</label></td>
                        <td><label for="category item">Category item</label></td>
                        <td><label for="Available quantity">available quantity</label></td>
                        <td><label for="unit of measure">centimetre</label></td>
                        <td><label for="unit price">price</label></td>
                        <td><label for="currency">rupees</label></td>
                        <td><label for="supplier">supplier</label></td>
                    </tr>
                    <tr style="grid-column:1/10; grid-row: 10/11;">
                        <td><label for="id">Id</label></td>
                        <td><label for="Title">title</label></td>
                        <td><label for="description">description</label></td>
                        <td><label for="category item">Category item</label></td>
                        <td><label for="Available quantity">available quantity</label></td>
                        <td><label for="unit of measure">centimetre</label></td>
                        <td><label for="unit price">price</label></td>
                        <td><label for="currency">rupees</label></td>
                        <td><label for="supplier">supplier</label></td>
                    </tr>



                </table>
                <span style="top: 37%;margin-left: 51%;">
                <a href="#" class="previous round">&#8249;</a>
                <a href="#" class="next round">&#8250;</a>
            </span>

            </div>

        </div>
        <footer id="footer">
            <div class="white-block-content">
                <h2>Suppliers Cave</h2>
                <ul style="list-style-type: none">
                    <li> <a target="_self" href="#"> Home </a></li>
                    <li> <a target="_self" href="#"> About Us </a></li>
                    <li><a target="_self" href="#">How it Works</a></li>

                </ul>
            </div>
            <div class="white-block-content1">
                <h2 style="margin-left: 2%;">Support</h2>
                <ul style="list-style-type: none">
                    <li> <a target="_self" href="#"> Contact </a></li>
                    <li> <a target="_self" href="#"> FAQ </a></li>

                </ul>
            </div>
        </footer>
    </div>

</body>

</html>
