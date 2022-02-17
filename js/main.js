var myContract;
        async function CheckMetamaskConnection() {
            // Modern dapp browsers...
            if (window.ethereum) {
                window.web3 = new Web3(window.ethereum);
                try {
                    // Request account access if needed
                    await ethereum.enable();
                    // Acccounts now exposed
                    return true;
                } catch (error) {
                    // User denied account access...
                    return false;
                }
            }
            // Legacy dapp browsers...
            else if (window.web3) {
                window.web3 = new Web3(web3.currentProvider);
                // Acccounts always exposed

                return true;
            }
            // Non-dapp browsers...
            else {
                console.log('Non-Ethereum browser detected. You should consider trying MetaMask!');
                return false;
            }
        }

        $(document).ready(async function () {
            var IsMetamask = await CheckMetamaskConnection();
            if (IsMetamask) {
                myContract = new web3.eth.Contract(SmartContractABI, SmartContractAddress);
                getCandidate(1);
                getCandidate(2);
                getCandidate(3);
                getCandidate(4);

                myContract.events.eventVote({
                    fromBlock: 0
                }, function (error, event) {
                    //console.log("event: ",event);
                    getCandidate(event.args._candidateid)
                    });
                //console.log("my contract:", myContract);
                console.log("Metamask detected!")
            } else {
                console.log("Metamask not detected");
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Metamask not detected!',
                    onClose() {
                        location.reload();
                    }
                });
            }
        });

        async function getCandidate(cad) {
            await myContract.methods.candidates(cad).call(function (err, result) {
                if (!err) {
                    console.log("result:", result);
                    document.getElementById("cad" + cad).innerHTML = result[1];
                    document.getElementById("cad" + cad + 'count').innerHTML = result[2];
                }


            })

        }

        async function Vote(cad) {
            var ben = await web3.eth.getAccounts()
            await myContract.methods.vote(cad).send({from: ben[0]}, function (err, result) {
                /*'0xCC9AC83832407A0C9dC00BfB651dFEe621c241B2'*//*web3.eth.getAccounts()*/ /*web3.eth.accounts[0] */
                if (!err) {
                    
                } else {
                    
                }
            })
        }
