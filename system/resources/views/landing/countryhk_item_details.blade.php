@extends('master')

@section('sale')

<div id="whatsit" class="padding">
				
<div class="container">
    <div class="row">
        <div class="col-md-13 col-md-offset-0">

			<div class="panel panel-warning" style="width: 100%">
                <div class="panel-body">
                    @forelse($items as $item)
                        
                        <table cellpadding="6" >                            
                            <tr>                              
                              <td width="250px" height="221" valign="top">

                              <!-- <form action="{{ url('landing.countryhk/'.$item->avatar) }}" method="POST"> -->
                                
                                <a href="{{ url('/'.$item->item_name) }}" target="_blank">
                                <img style="border:#ffdab3 1px solid; position: relative" src="http://localhost/Sales/system/public/images/items/{{$item->avatar}}" width="200" height="230" /></a>
                                    
                                 <!--    <input type="hidden" name="_method" value="PUT">
                                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    
                                </form> -->
                              </td>
                           
                              <td valign="top">
						    	<table cellpadding="10px">
						    		<tr>
						    			<td width="100px"><b>Item name</b></td>
						    			<td>{{$item->item_name}}</td>
						    		</tr>
						    		<tr>
						    			<td width="100px"><b>Price: </b></td>
						    			<td>RM {{$item->selling_price}}</td>
						    		</tr>
						    		<tr>
						    			<td><b>Category: </b></td>
						    			<td>{{$item->category}}</td>
						    		</tr>
						    		<tr>
						    			<td valign="top"><b>Description: </b></td>
						    			<td>{!! nl2br($item->description) !!}</td>
						    		</tr>
						    	</table></td>                           
                            </tr>      
                                           
                          </table>
                          
                    @empty 
                        <p>There is no Deal</p>
                    @endforelse
                </div>
            </div>
            </div>
            </div>
            </div>
		</div>

@endsection


