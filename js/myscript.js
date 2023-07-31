$(document).ready(function(){
    console.log('inscript');
    $(document).on('click','.btn_delete',function(event){
        event.preventDefault();
        let status=confirm("Are you sure to delete");
        // console.log(status);
        if(status)
        {
            let id=$(this).parent().attr('id');
            // console.log("id is "+id);

            $.ajax({
                method:'post',
                url:'delete_category.php',
                data:{id:id},
                success:function(response){
                    if(response=='success')
                    {
                        location.href='categories.php';
                    }
                    else
                    {
                        alert(response);
                    }
                },
                error:function(error)
                {
                    alert(error);
                }
            })
        }
    })


 $(document).on('click','.p_delete',function(event){
        event.preventDefault();
        let status=confirm("Are you sure to delete");
        // console.log(status);
        if(status)
        {
            let id=$(this).parent().attr('id');
            // console.log("id is "+id);

            $.ajax({
                method:'post',
                url:'delete_payment.php',
                data:{id:id},
                success:function(response){
                    if(response=='success')
                    {
                        location.href='payments.php';
                    }
                    else
                    {
                        alert(response);
                    }
                },
                error:function(error)
                {
                    alert(error);
                }
            })
        }
    })



    $('#mytable').DataTable();
})