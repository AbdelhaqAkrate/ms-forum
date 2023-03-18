$(document).ready(function () {
    $("#newComment").submit(function (e) {
        e.preventDefault();
        var formdata = new FormData(this);
        var body = $("#comments");
        var comment = "";
        $.ajax({
            url: "http://localhost:8000/posts/new-comment",
            type: "POST",
            data: formdata,
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                comment = "";
                comment +=
                    `  <div class="flex items-center py-4">
                        <img src="https://images.pexels.com/photos/614810/pexels-photo-614810.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" class="h-9 w-9 rounded-full object-cover"
                            alt="user" />
                        <p class="block ml-2 font-bold">` +
                    data.user.name +
                    `</p>
                        <p class="block ml-2">` +
                    data.body +
                    `</p>
                        <p class="block ml-2">` +
                    data.created_at +
                    `</p>
                    </div>
                            <span class="text-gray-700 font-medium ml-1">` +
                    data.message +
                    `</span>`;
                body.append(comment);
            },
            error: function (data) {
                console.log(data);
            },
        });
    });
});