<div >
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">{{__('words.delete')}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h1 style="text-align: center">{{__('words.deleted')}}</h1>
                </div>
                <div class="modal-footer">
                    <button type="button"data-bs-dismiss="modal" aria-label="Close" class="btn btn-danger">{{__('words.no')}}</button>
                    <a href="/about/{{$id}}" class="btn btn-success" id="deleteBtn" >{{__('words.yes')}}</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#deleteBtn').on('click' , function(e){
            let id = {{$id}};
            let myUrl = this.attr('href')
            alert(myUrl)
            e.preventDefault()
            $.ajax({
                url:myUrl,
                type:'POST',
                data:id,
                success:function(data){

                },
            })
        })
    </script>
</div>
