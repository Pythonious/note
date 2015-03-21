<html ng-app="hesapModule">
	
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.1.5/angular.min.js"></script> 
   	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> 
    <script src="yo.js"></script>
    <link rel="stylesheet" type="text/css" href="custom.css">
  </head>

    <body>
        <div class="container navbar-inverse">
            <div class="navbar-header ">
                <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> -->
                <a class="navbar-brand" href="#"><strong><i class="fa fa-book"></i>  Project Note Manager</strong></a>
            </div>
            <div class="collapse navbar-collapse  ">
                <ul class="nav navbar-nav">
                    <!-- <li class="active"><a href="#">Home</a></li> -->
                    <!-- <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li> -->
                </ul>
            </div><!--/.nav-collapse -->
        </div>

		<br>
		
        <div ng-controller="productController as productCtrl ">
           
            <div class="container">
            	
			  <ul id="notebook_ul">
			    <li ng-repeat="product in products  track by product.id | filter:query | orderBy: orderList">
			      <strong>Title:</strong> {{product.title}}<br/>
			      <italic>Text:</italic> {{product.text}}<br/>
			      <div class="right top">{{product.date}}</div>
                     <div class="right"><button class="btn btn-warning btn-sm"ng-click="productCtrl.edit(product)"><span class="glyphicon-pencil"></span></button> <button class="btn btn-danger btn-sm"ng-click="productCtrl.delete($index)">x</button></div>   
                     <div class="right"></div>           
			      
			    </li>

			  </ul>
			  
			  <br>
			  
			  <!-- <div id="notebooks">
			  <span >Number of Notes: {{products.length}}</span>
			  </div> -->
                 
                <!-- <table class="table table-condensed">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Title</th>
                            <th>Text</th>
                            <th>Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr ng-repeat="product in products  track by product.id">
                            
                            <td></td>
                            <td>{{product.name}}</td>
                            <td>{{product.unit}}</td>
                            <td>{{product.price}}</td>
                            
                            <td>
                                <button class="btn btn-warning btn-sm"ng-click="productCtrl.edit(product)"><span class="glyphicon-pencil"></span></button>
                                <button class="btn btn-danger btn-sm"ng-click="productCtrl.delete($index)">x</button>

                            </td>
                            
                        </tr>
                        
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table> -->
                
                <!-- <div class="row">
                	<h1>Current Set Of Data</h1>
                    <p>{{productCtrl.product.name}}</p>
                    <p>{{productCtrl.product.unit}}</p>
                    <p>{{productCtrl.product.price}}</p>
                </div> -->
                <!-- <div class="col-md-1"></div> -->
                
                <div class="col-md-3"> <img style="width:200px; height:220px " src="http://s2.postimg.org/60hqjq74p/142477307327042.png" class="img-responsive"></div>
                
                <div class="col-md-8">      
                	
                <form role="form" class="form-horizontal" ng-submit="productCtrl.add()" >
                    <div class="form-group">
                        <label control-label">Title</label>
                        <div ">
                            <input type="text" class="form-control"  placeholder="Enter In The Title Here" ng-model="productCtrl.product.title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  control-label">Text</label>
                        <div >
                            <textarea type="text" class="form-control"  placeholder="Enter In The Text Here" ng-model="productCtrl.product.text"></textarea>
                        </div>
                    </div>
                    <div class="form-group" >
                        <label  control-label">Date</label>
                        <div >
                            <input type="date" class="form-control"  placeholder="Enter In The Date here" ng-model="productCtrl.product.date">
                        </div>
                    </div>
                    <div class="form-group">
                        <div >
                            <button type="submit" class="btn btn-default" ng-hide="productCtrl.product._state=='edit'">Submit</button>
                            <button type="submit" class="btn btn-default" ng-show="productCtrl.product._state=='edit'">Update</button>
                            <a class="btn btn-default" ng-click="productCtrl.cancelUpdate()" ng-show="productCtrl.product._state=='edit'">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
            
            </div>
            <!-- 
             <div id="notebooks" >
			  <input type="text" id="query" ng-model="search.$"/>
			  <!-- <select ng-model="orderList">
			    <option value="name">By name</option>
			    <option value="-age">Newest</option>
			    <option value="age">Oldest</option>
			  </select> -->
			  
			  <!-- <ul id="notebook_ul">
			    <li ng-repeat="product in products  track by product.id | filter:query | orderBy: orderList">
			      <strong>Title:</strong> {{product.name}}<br/>
			      <italic>Text:</italic> {{product.unit}}<br/>
			      <div class="right top">{{product.price}}</div>
                     <div class="right"><button class="btn btn-warning btn-sm"ng-click="productCtrl.edit(product)"><span class="glyphicon-pencil"></span></button> <button class="btn btn-danger btn-sm"ng-click="productCtrl.delete($index)">x</button></div>   
                     <div class="right"></div>           
			      
			    </li>

			  </ul>
			  
			  <div id="notebooks">
			  <span >Number of Notes: {{products.length}}</span>
			  </div> -->
			  

	        <!--<script src="js/bootstrap.js"></script>-->
    </body>

</html>