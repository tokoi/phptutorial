<!DOCTYPE html> 

<html lang="en"> 

<head> 

    <title>Book List</title> 
    
<!-- CSS と JavaScript --> 

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



</head> 

    <body> 

    <div class="container"> 
    
        <nav class="navbar navbar-default"> 
        
        <!-- ナビバーの 内容 --> 
        
        </nav> 
    </div> 
    
    
             @if(count($books) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        現在の本
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <!-- テーブルヘッダ -->
                            <thead>
                                <th>ユーザ一覧<th>
                                <th>&nbsp;<th>    
                            </thead>
                            <!--テーブル本体-->
                            <tbody>
                                @foreach ($users as $user) 
                                    <tr> 
                                    
                                        <!-- ユーザID --> 
                                        <td class="table-text"> 
                                            <div>{{ $user->item_name }}</div>
                                        </td>
                                          <!-- ユーザ名 --> 
                                        <td class="table-text1"> 
                                            <div>{{ $user->item_name }}</div>
                                        </td>
                                          <!-- ユーザアドレス --> 
                                        <td class="table-text2"> 
                                            <div>{{ $user->item_name }}</div>
                                        </td>
           
                                       
                                    </tr> 
                                @endforeach 
                            </tbody> 
                        </table> 
                    </div> 
                </div>
            @endif
    
    </body> 

</html>