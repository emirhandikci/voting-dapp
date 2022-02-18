<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/main.css">
    <link rel="stylesheet" href="./assets/chart.scss">

    <script src="//use.typekit.net/ftn5fet.js"></script>

    <script>
        try {
            Typekit.load();
        } catch (e) {}
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voting DApp</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js@1.0.0-beta.36/dist/web3.min.js"
        integrity="sha256-nWBTbvxhJgjslRyuAKJHK+XcZPlCnmIAAMixz6EefVk=" crossorigin="anonymous"></script>
    <script src="https://d3js.org/d3.v3.min.js" charset="utf-8"></script>
</head>

<body class="text-secondary font-weight-dark">


    <div class="container">
        <div class="row">

            <div class="col-md-12 d-flex justify-content-center mt-5">

                <div class="candidate border border-dark">
                    <div class="row candidate-info">
                        <img src="./assets/img/trump.jpg" alt="" class="img-thumbnail thumb-size">
                        <h2 class="candidate-names">Donald J. Trump</h2>
                        <a onclick="Vote(1)">
                            <div class="vote-section border border-dark">
                                <img src="./assets/img/seal.png" alt="" class="seal">
                            </div>
                        </a>
                    </div>
                </div>

                <div class="candidate border border-dark ">
                    <div class="row candidate-info">
                        <img src="./assets/img/sanders.jpg" alt="" class="img-thumbnail thumb-size">
                        <h2 class="candidate-names">Bernie Sanders</h2>
                        <a onclick="Vote(2)">
                            <div class="vote-section border border-dark">
                                <img src="./assets/img/seal.png" alt="" class="seal">
                            </div>
                        </a>
                    </div>
                </div>

                <div class="candidate border border-dark">
                    <div class="row candidate-info">
                        <img src="./assets/img/biden.jpg" alt="" class="img-thumbnail thumb-size">
                        <h2 class="candidate-names">Joseph R. Biden Jr.</h2>
                        <a onclick="Vote(3)">
                            <div class="vote-section border border-dark">
                                <img src="./assets/img/seal.png" alt="" class="seal">
                            </div>
                        </a>
                    </div>
                </div>

                <div class="candidate border border-dark">
                    <div class="row candidate-info">
                        <img src="./assets/img/gabbard.jpg" alt="" class="img-thumbnail thumb-size">
                        <h2 class="candidate-names">Tulsi Gabbard</h2>
                        <a onclick="Vote(6)">
                            <div class="vote-section border border-dark">
                                <img src="./assets/img/seal.png" alt="" class="seal">
                            </div>
                        </a>
                    </div>
                </div>

            </div>
            <div class="row col-md-6 chart-table  d-flex justify-content-center">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th id="cad1" scope="col">First</th>
                            <th id="cad2" scope="col">Last</th>
                            <th id="cad3" scope="col">Handle</th>
                            <th id="cad4" scope="col">Four</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td id="cad1count">0</td>
                            <td id="cad2count">0</td>
                            <td id="cad3count">0</td>
                            <td id="cad4count">0</td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
        <div class="contract-adresses">
            <h5>Smart Contract Address<br>0x195C660E0f71C80cBF1B410B42EDd74711652842</h5>
        </div>
    </div>

 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
        integrity="sha256-qM7QTJSlvtPSxVRjVWNM2OfTAz/3k5ovHOKmKXuYMO4=" crossorigin="anonymous"></script>
    <script src="js/contract.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>

    <script src="./js/contract.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>