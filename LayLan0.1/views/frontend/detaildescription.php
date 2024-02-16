<div class="container border border-secondary rounded mt-5 ">
      <div class="row mt-3">
          <div class="col-md-6">
            <img src="./assets/images/jade.jpeg" id="mainImage" class="img-fluid rounded display-image" alt="Main Image">
                  <div class="row mt-2">
                      <div class="col-md-2">
                        <img src="./assets/images/jade.jpeg" class="img-fluid thumbnail" onclick="displayImage('./assets/images/jade.jpeg')" alt="Thumbnail Image 1">
                      </div>
                      <div class="col-md-2">
                        <img src="./assets/images/jadestone.jpg" class="img-fluid  thumbnail" onclick="displayImage('./assets/images/jadestone.jpg')" alt="Thumbnail Image 2">
                      </div>
                      <div class="col-md-2">
                        <img src="./assets/images/logo.jpg" class="img-fluid  thumbnail" onclick="displayImage('./assets/images/logo.jpg')" alt="Thumbnail Image 3">
                      </div>
                      <div class="col-md-2">
                        <img src="./assets/images/lordofring.jpeg" class="img-fluid  thumbnail" onclick="displayImage('./assets/images/lordofring.jpeg')" alt="Thumbnail Image 4">
                      </div>
                  </div>
          </div>
          <div class="col-md-6">
           <table class="table table-secondary table-hover">
              <thead>
                <tr>
                  <th scope="col">Name
                        <span class="badge text-bg-warning">Incoming</span>

                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Description:Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.
                  Description:Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.</td>
                </tr>
                <tr>
                  <td>Opening Price</td>
                </tr>
                <tr>
                  <td>Auction start from</td>
                </tr>
                <tr>
                  <td>
                       <form class="row g-3">
                          <div class="col-auto">
                            <input type="text" class="form-control" id="bidprice" placeholder="Enter your maximum bid">
                          </div>
                          <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">Bid</button>
                          </div>
                        </form>
                  </td>
                </tr>
                <tr>
                      <td>
                            Item Location:
                      </td>
                </tr>
              </tbody>
            </table>
        </div>
      
  
</div>
</div>


<script>
  function displayImage(imageUrl) {
    var mainImage = document.getElementById("mainImage");
    mainImage.src = imageUrl;
    
    // Remove the 'selected' class from all thumbnails
    var thumbnails = document.getElementsByClassName("thumbnail");
    for (var i = 0; i < thumbnails.length; i++) {
      thumbnails[i].classList.remove("selected");
    }
    
    // Add the 'selected' class to the clicked thumbnail
    event.target.classList.add("selected");
  }
</script>
