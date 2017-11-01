    var url = "section";
    //var section_url = "section";
    //var url1 = "class1";
    //display modal form for product editing
    $(document).on('click','.open_modal',function(){
        var product_id = $(this).val();
        //alert(product_id);
       
        $.get(url + '/' + product_id, function (data) {
            //success data
            console.log(data);
            $('#product_id').val(data.id);
            $('#section_name').val(data.section_name);
            $('#class').val(data.class_id);
            $('#teacher').val(data.teacher_id);
            $('#status').val(data.status);
            $('#btn-save').val("update");
            $('#myModal').modal('show');
        }) 
    });
    //display modal form for creating new product
    $('#btn_add').click(function(){
        $('#btn-save').val("add");
        $('#frmProducts').trigger("reset");
        $('#myModal').modal('show');
    });









    //delete product and remove it from list
    $(document).on('click','.delete-product',function(){
        var product_id = $(this).val();
        //alert(product_id);
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
         if(confirm('Are you sure You Want To Delete This Section ?'))
        {
        $.ajax({
            type: "DELETE",
            url: url + '/' + product_id,
            success: function (data) {
                console.log(data);
                $("#product" + product_id).remove();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    }
    });











        $("#btn-save").click(function(e){



            e.preventDefault();

            var _token = $("input[name='_token']").val();
            var class_id = $('#class').val();
            var section_name = $("input[name='section_name']").val();
            var teacher = $('#teacher').val();
            var status = $('#status').val();
            var product_id = $('#product_id').val();
            var state = $('#btn-save').val();
            var my_url = url;
            //alert(teacher);
            type="POST";
            if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url += '/' + product_id;
        }
            

            $.ajax({

                url: my_url,
                type:type,
                data: {_token:_token, class_id:class_id, section_name:section_name,teacher:teacher,status:status},
                success: function(data) {
                    if($.isEmptyObject(data.error)){

                        
                        //alert('hii');
                        console.log(data);
                        if(data[0].section_teacher==null)
                        {
                            data[0].section_teacher = "";

                        }
                var product = '<tr id="product' + data[0].id + '"><td>' + data[1].class_name + '</td><td>' + data[0].section_name + '</td><td>' + data[2] + '</td><td>' + data[0].status + '</td>';
                product += '<td><button style="background-color:#2c3e50;color:#fff;" class="btn btn-xs btn-detail btn-rounded open_modal" value="' + data[0].id + '">Edit</button>';
                product += ' <button class="btn btn-xs btn-warning btn-rounded btn-delete delete-product" value="' + data[0].id + '">Delete</button></td></tr>';
                if (state == "add"){ //if user added a new record
                    $('#products-list').append(product);
                }else{ //if user updated an existing record
                    $("#product" + product_id).replaceWith( product );
                }

                        //alert(data.success);
                        $('#myModal').modal('hide');
                        $('#frmProducts').trigger("reset");
                        $(".print-error-msg").css('display','none');
                         
                    }else{
                        printErrorMsg(data.error);
                    }
                }
            });

        }); 

        function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }



      /*    $(document).ready(function () {        
        $('[data-toggle=confirmation]').confirmation({
            rootSelector: '[data-toggle=confirmation]',
            onConfirm: function (event, element) {
                element.closest('form').submit();
            }
        });   
    });
*/

          $('.btn-cancel').click(function(){
            
            $(".print-error-msg").css('display','none');
            $('#myModal').modal('hide');

          });
    



//multiple fields


 /*   
    $('#add').click(function(){
        
        var inp = $('.modal-body');
        
        var i = $('input').size() + 1;
        
        $('<div class="modal-body' + i +'"><input type="text" id="name" class="name" name="name[]" placeholder="Input '+i+'"/><span class="add" id="remove" style="font-size:50px;color:red"> - </span></div>').appendTo(inp);
        
        i++;
        
    });
    
    
    
    $('body').on('click','#remove',function(){
        
        $(this).parent('div').remove();

        
    });
*/
        



    //create new product / update existing product
  /* $("#btn-save").click(function (e) {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        e.preventDefault(); 
        var formData = {
            class_name: $('#name').val(),
            class_teacher: $('#details').val(),
        }
        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();
        var type = "POST"; //for creating new resource
        var product_id = $('#product_id').val();
        var my_url = url;
        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url += '/' + product_id;
        }
        console.log(formData);
        $.ajax({
            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            success: function (data) {
                

                console.log(data);
                var product = '<tr id="product' + data.id + '"><td>' + data.class_name + '</td><td>' + data.class_teacher + '</td>';
                product += '<td><button class="btn btn-warning btn-detail open_modal" value="' + data.id + '">Edit</button>';
                product += ' <button class="btn btn-danger btn-delete delete-product" value="' + data.id + '">Delete</button></td></tr>';
                if (state == "add"){ //if user added a new record
                    $('#products-list').append(product);
                }else{ //if user updated an existing record
                    $("#product" + product_id).replaceWith( product );
                }
                $('#frmProducts').trigger("reset");
                $('#myModal').modal('hide')
            },
            error: function () {
                
                console.log('Error:', data);
                
        
            }
        });
    });
*/



















