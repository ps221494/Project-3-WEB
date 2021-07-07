.ContentMenu
{
    max-width: 100%;
    height: auto;
}

.HeaderMenu
{
    height: 75px;
    background-color: teal;
    color: whitesmoke;
    border-radius: 5px;
}

.HeaderMenuDiv
{
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    height: 100%;
    max-width: 100%;
}

.MenuBtnsDiv
{
    box-shadow: 7px 7px 3px darkslategray;
    border-radius: 15px;
    max-width: 100%;
}

.MenuBtns
{
    background-color: whitesmoke;
    color: black;
    border: none;
    font-size: 15px;
    font-weight: bold;
    border-radius: 10px;
    width: 170px;
    height: 35px;
}


@media screen and (max-width: 1014px)
{
    
.HeaderMenuDiv
{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
    align-items: center;
}

.HeaderMenu
{
    max-height: fit-content;
    background-color: teal;
    color: whitesmoke;
    border-radius: 5px;
}

.MenuBtns
{
    background-color: whitesmoke;
    color: black;
    font-size: 14px;
    font-weight: bold;
    border-radius: 15px;
    width: 150px;
    height: 32px;
}

}

@media screen and (max-width: 667px)
{

.HeaderMenuDiv
{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
    align-items: center;
}

.HeaderMenu
{
    max-height: fit-content;
    background-color: teal;
    color: whitesmoke;
    border-radius: 5px;
}

.MenuBtns
{
    background-color: whitesmoke;
    color: black;
    font-size: 12px;
    font-weight: bold;
    border-radius: 15px;
    width: 125px;
    height: 30px;
}

}

@media screen and (max-width: 264px)
{

.HeaderMenu
{
    height: fit-content;
    background-color: teal;
    color: whitesmoke;
    border-radius: 5px;
}

.MenuBtns
{
    background-color: whitesmoke;
    color: black;
    font-size: 9px;
    font-weight: bold;
    border-radius: 15px;
    width: 75px;
    height: 20px;
}

}