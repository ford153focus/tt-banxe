function get_products() {
    $("tbody").html("");

    let jqxhr = $.get("/api/products")
        .done(function(data) {
            for (const product of data) {
                $("tbody").append(`
                        <tr>
                            <td>${product.id}</td>
                            <td>${product.name}</td>
                            <td>${product.description}</td>
                            <td>${product.price}</td>
                            <td><button onclick="remove_product(this);">Remove</button</td>
                        </tr>
                    `);
            }
        })
        .fail(function() {
            alert("error getting products");
        });
}

function remove_product(button) {
    let id = button.parentElement.parentElement.querySelector('td').innerText;

    $.ajax({
        type: "DELETE",
        url: `/api/products/${id}`,
        success: function () {
            get_products();
        },
        error: function () {
            alert("error while removing product");
        }
    });
}

function send_form(form) {
    let formData = new FormData(form);

    let payload = {
        'name': formData.get('name'),
        'description': formData.get('description'),
        'price': formData.get('price'),
    };

    $.ajax({
        type: "POST",
        url: '/api/products',
        contentType: "application/json; charset=utf-8",
        data: JSON.stringify(payload),
        success: function(data)
        {
            $('[data-fancybox-close]').click();
            get_products();
        },
        error: function () {
            alert("error while adding product");
        }
    });
}

get_products();

Fancybox.bind('[data-fancybox]', {
    // pass
});
