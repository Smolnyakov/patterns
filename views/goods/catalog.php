<h2>Каталог</h2>

<?php foreach ($catalog as $item):?>
    <div>
        <h3><a href="/goods/card/?id=<?=$item['id']?>"><?=$item['product_name']?></a></h3>
        <p>price: <?=$item['description']?></p>
        <p>price: <?=$item['price']?></p>
        <button class="buy" data-id="<?=$item['id']?>">Купить</button>
    </div>
<?php endforeach;?>

<a href="/goods/catalog/?page=<?=$page?>">Еще</a>

<script>

    let buttons = document.querySelectorAll('.buy');
    buttons.forEach((elem) => {
        elem.addEventListener('click', () => {
            let id = elem.getAttribute('data-id');
            (
                async () => {
                    const response = await fetch('/cart/add/?id=' + id);
                    const answer = await response.json();
                    document.getElementById('count').innerText = answer.count;
                }
            )();
        })
    })

</script>