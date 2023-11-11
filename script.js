function changeImg(num1, num2){
    switch(num1){
        case 1:{
            let card = document.getElementById("ant");
            switch(num2){
                case 1:{
                    card.style.backgroundImage = "url('images/menu/antipasti/1.jpg')";
                }
                break;
                case 2:{
                    card.style.backgroundImage = "url('images/menu/antipasti/2.jpg')";
                }
                break;
                case 3:{
                    card.style.backgroundImage = "url('images/menu/antipasti/3.jpg')";
                }
                break;
                case 4:{
                    card.style.backgroundImage = "url('images/menu/antipasti/4.jpg')";
                }
                break;
                case 5:{
                    card.style.backgroundImage = "url('images/menu/antipasti/5.jpg')";
                }
                break;
                case 6:{
                    card.style.backgroundImage = "url('images/menu/antipasti/6.jpg')";
                }
                break;
            }
            break;
        }
        case 2:{
            let card = document.getElementById("primi");
            switch(num2){
                case 1:{
                    card.style.backgroundImage = "url('images/menu/primi/1.jpg')";
                }
                break;
                case 2:{
                    card.style.backgroundImage = "url('images/menu/primi/2.jpg')";
                }
                break;
                case 3:{
                    card.style.backgroundImage = "url('images/menu/primi/3.png')";
                }
                break;
                case 4:{
                    card.style.backgroundImage = "url('images/menu/primi/4.jpg')";
                }
                break;
                case 5:{
                    card.style.backgroundImage = "url('images/menu/primi/5.jpg')";
                }
                break;
                case 6:{
                    card.style.backgroundImage = "url('images/menu/primi/6.jpg')";
                }
                break;
            }
        }
        break;
        default:
            case 3:{
                let card = document.getElementById("secondi");
                switch(num2){
                    case 1:{
                        card.style.backgroundImage = "url('images/menu/secondi/1.jpeg')";
                    }
                    break;
                    case 2:{
                        card.style.backgroundImage = "url('images/menu/secondi/2.png')";
                    }
                    break;
                    case 3:{
                        card.style.backgroundImage = "url('images/menu/secondi/3.jpg')";
                    }
                    break;
                    case 4:{
                        card.style.backgroundImage = "url('images/menu/secondi/4.jpeg')";
                    }
                    break;
                    case 5:{
                        card.style.backgroundImage = "url('images/menu/secondi/5.jpg')";
                    }
                    break;
                    case 6:{
                        card.style.backgroundImage = "url('images/menu/secondi/6.jpg')";
                    }
                    break;
                }
            }
    }
}