<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko</title>
    <style>
        .kontainer {
          display: flex; 
          justify-content: space-between;
        }
        .kartu {
          width: 18rem; 
          border: 1px solid #ccc; 
          border-radius: 8px; 
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
          margin-bottom: 20px; 
        }

        .gambar-kartu {
          width: 100%; 
          border-top-left-radius: 8px; 
          border-top-right-radius: 8px; 
        }

        .konten-kartu {
          padding: 20px; 
        }

        .judul-kartu {
          font-size: 1.25rem; 
          margin-bottom: 0.75rem; 
        }

        .teks-kartu {
          color: #666; 
        }

        .btn-utama {
          background-color: #007bff; 
          color: #fff; 
          text-decoration: none; 
          padding: 0.5rem 1rem; 
          border-radius: 4px;
          display: inline-block; 
          margin-top: 10px; 
        }

        .btn-utama:hover {
          background-color: #0056b3; 
        }

        .cart-icon {
            position: fixed;
            top: 20px;
            right: 20px;
            font-size: 24px;
            color: #007bff;
            cursor: pointer;
        }

        #cart-dropdown {
            position: fixed;
            top: 60px;
            right: 20px;
            width: 200px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: none;
        }
        #cart-items {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        #cart-items li {
            padding: 8px;
            border-bottom: 1px solid #ccc;
        }
        #cart-items li:last-child {
            border-bottom: none;
        }

    </style>
</head>
<body>
     <form id="order-from" action="output.php" method="GET" >
        <center><img src="">
        <h1>NAFORA CAFFE </h1></center>
        <hr>
        <input type="text" name="nama_pelanggan" placeholder="Masukkan Nama Pelanggan" required><br>
        <input type="text" name="alamat_pelanggan" placeholder="Masukkan Alamat Pelanggan" required><br>
        <input type="text" name="nomor_hp" placeholder="Masukkan Nomor HP" required><br>
        <hr>
        <h3>Produk</h3>
    <div class="kontainer">
    <div class="kartu" style="width: 18rem;">
      <img src="./img./Espresso.jpeg " class="gambar-kartu" alt="">
      <div class="konten-kartu">
        <h5 class="judul-kartu">Espresso</h5>
        <p class="teks-kartu">Harga : 15.000</p>
        <form action="output.php" method="GET">
        <input type="hidden" name="nama_item1" value="Espresso">
        <input type="hidden" name="harga_item1" value="15000">
        <label for="jumlah1">Jumlah :</label>
        <input type="number" id="jumlah1" name="jumlah1" >
        <button type="submit" class="btn-utama">Tambah ke keranjang</button>
      </div>
    </div>
    <div class="kartu" style="width: 18rem;">
      <img src="./img./Americano.jpg" class="gambar-kartu" alt="">
      <div class="konten-kartu">
        <h5 class="judul-kartu">Americano</h5>
        <p class="teks-kartu">Harga : 22.000</p>
        <form action="output.php" method="GET">
        <input type="hidden" name="nama_item2" value="Americano">
        <input type="hidden" name="harga_item2" value="22000">
        <label for="jumlah2">Jumlah : </label>
        <input type="number" id="jumlah2" name="jumlah2" >
        <button type="submit" class="btn-utama">Tambah ke keranjang</button>
      </div>
    </div>
    <div class="kartu" style="width: 18rem;">
      <img src="./img./Latte.jpg" style="width: 290px; height: 160px;" class="gambar-kartu" alt="">
      <div class="konten-kartu">
        <h5 class="judul-kartu">Latte</h5>
        <p class="teks-kartu">Harga : 24.000</p>
        <form action="output.php" method="GET">
        <input type="hidden" name="nama_item3" value="Latte">
        <input type="hidden" name="harga_item3" value="24000">
        <label for="jumlah3">Jumlah :</label>
        <input type="number" id="jumlah3" name="jumlah3">
        <button type="submit" class="btn-utama">Tambah ke keranjang</button>
      </div>
    </div>
    </div>
    <div class="cart-icon" onclick="toggleCart()">🛒 <span id="cart-count" style="color: red;">0</span></div>
    <div id="cart-dropdown">
        <h3>Keranjang Belanja</h3>
        <ul id="cart-items">
        </ul>
        <form id="checkout-form" action="output.php" method="GET">
            <input type="hidden" id="total_price" name="total_price">
            <button type="submit" >Pesan</button>
        </form>
    </div>
    </form>
    <script>
        function toggleCart() {
            var cartDropdown = document.getElementById("cart-dropdown");
            if (cartDropdown.style.display === "block") {
                cartDropdown.style.display = "none";
            } else {
                cartDropdown.style.display = "block";
            }
        }

        function addToCart(productName, price, quantity) {
            var listItem = document.createElement("li");
            listItem.textContent = productName + " - " + price + " x " + quantity;
            var cartList = document.getElementById("cart-items");
            cartList.appendChild(listItem);
        }

        function addToCart(productName, price, quantity) {
    var listItem = document.createElement("li");
    listItem.textContent = productName + " - " + price + " x " + quantity;
    var cartList = document.getElementById("cart-items");
    cartList.appendChild(listItem);
    
}

function updateCartCount() {
    var cartItems = document.querySelectorAll("#cart-items li");
    var cartCount = document.getElementById("cart-count");
    cartCount.textContent = cartItems.length; 
}

        var addToCartButtons = document.querySelectorAll(".btn-utama");

        addToCartButtons.forEach(function(button) {
            button.addEventListener("click", function(event) {
                var productName = this.parentNode.querySelector(".judul-kartu").textContent;
                var price = this.parentNode.querySelector(".teks-kartu").textContent.replace("Harga : ", "");
                var quantity = this.parentNode.querySelector("input[type='number']").value;

                addToCart(productName, price, quantity);
                event.preventDefault();
            });
        });
        function toggleCart() {
    var cartDropdown = document.getElementById("cart-dropdown");
    if (cartDropdown.style.display === "block") {
        cartDropdown.style.display = "none";
    } else {
        cartDropdown.style.display = "block";
        updateCartCount(); 
    }
}
    </script>
</body>
</html>
