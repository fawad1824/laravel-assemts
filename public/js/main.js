$(document).ready(function () {
    $(document).on('click', '.addnew', function (e) {
        e.preventDefault();
        ajaxSelect()
        var names = $('.namelist').val();
        var prices = $('.pricess').val();
        var Useraname = $('.Useraname').val();
        var html = "<tr>";
        html += "<td><input type='text' hidden readonly value='" + names + "' name='name[]' class='form-control'><input type='text' readonly value='" + Useraname + "' name='id[]' class='form-control'></td>";
        html += "<td><input type='number' readonly  value='" + prices + "' name='specialprice[]' class='form-control'></td>";
        html += "<td><button class='btn btn-danger removeone'>-</button></td>";
        html += "</tr>";
        $('#AddList').append(html);

    });
    ajaxSelect()
    function ajaxSelect() {
        $dataType = "get";
        $dataUrl = "/UsersList";
        ajaxrequest($dataType, $dataUrl, $dataList = null, $message = null, $message1 = null, $alert = null)
    }

    function DisplayUsers(data) {
        $('#namesAdd').empty();
        var dat = $("input[name='name[]']").map(function () {
            return parseInt($(this).val());
        }).get();

        var content = '<select class="form-control namelist" id="name" placeholder="Select User">';
        content += '<option value="">Please Select User</option>';
        $.each(data, function () {
            console.log(dat.includes(this.id));
            if (!dat.includes(this.id)) {
                content += '<option   value = "' + this.id + '" > ' + this.name + ' </option> ';
            }
        });
        content += '</select>';
        content += '<input hidden class="form-control Useraname"> ';
        $('#namesAdd').append(content);
    }


    $(document).on('click', '.removeone', function (e) {
        e.preventDefault();
        $(this).closest("tr").remove();
        ajaxSelect();
    });

    function ajaxrequest($dataType, $dataUrl, $dataList, $message, $message1 = null, $alert = null) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: $dataType,
            url: $dataUrl,
            data: $dataList,
            success: function (data) {
                console.log(data);
                $('#namesAdd').empty();
                DisplayUsers(data);
            }
        })
    }

    $(document).on('change', '.namelist', function () {
        data = {
            'name': $('.namelist').val()
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: $dataType,
            url: '/UsersName',
            data: data,
            success: function (data) {
                $('.Useraname').val(data.name)
                console.log(data.name);
            }
        })
    });

})