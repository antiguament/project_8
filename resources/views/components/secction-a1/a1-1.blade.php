
<style>
  .food-section {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    background-color: #f8f8f8;
    font-family: Arial, sans-serif;
    margin-bottom: 50px;
  }

  .food-image-container {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    padding-right: 20px;
  }

  .food-image {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease; /* Transición para la animación de escala */
  }

  .food-image:hover {
    transform: scale(1.05); /* Escala la imagen al 105% cuando el mouse pasa por encima */
  }

  .food-content {
    flex: 1;
    padding-left: 20px;
  }

  .food-title {
    font-size: 28px;
    color: #333;
    margin-bottom: 10px;
    opacity: 0; /* Inicialmente invisible */
    animation: fadeIn 0.5s forwards 0.2s; /* Animación de aparición */
  }

  .food-description {
    font-size: 16px;
    color: #555;
    margin-bottom: 20px;
    opacity: 0; /* Inicialmente invisible */
    animation: fadeIn 0.5s forwards 0.4s; /* Animación de aparición, retrasada */
  }

  .order-button {
    background-color: #ff6600;
    color: white;
    padding: 12px 25px;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s ease; /* Transición para cambio de color */
    opacity: 0; /* Inicialmente invisible */
    animation: fadeIn 0.5s forwards 0.6s; /* Animación de aparición, retrasada */
  }

  .order-button:hover {
    background-color: #cc5200;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
  }

  @media (max-width: 768px) {
    .food-section {
      flex-direction: column;
      text-align: center;
    }

    .food-image-container {
      padding-right: 0;
      padding-bottom: 20px;
    }

    .food-content {
      padding-left: 0;
    }
  }
</style>

<section class="food-section">
  <div class="food-image-container">
    <img src="{{ asset('images/imj-a1-1.png')  }}" alt="Comida de tus restaurantes favoritos" class="food-image">
  </div>
  <div class="food-content">
    <h2 class="food-title"> tu comida favorita a tu mesa</h2>
    <p class="food-description">
      Pretium lectus quam id leo in vitae turpis massa sed. Lorem donec massa sapien faucibus et molestie. Vitae elementum curabitur vitae nunc.
    </p>
    <button class="order-button">ORDENAR AHORA</button>
  </div>
</section>











