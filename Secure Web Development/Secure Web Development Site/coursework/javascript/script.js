// once the window has loaded prepare the functions
window.onload=function()
{
    preparePage();
    loadDoc();
}

// preparePage function
function preparePage()
{
var expandHistory = document.getElementById("readMore"); // create a variable named expandHistory so when the readmore button  is clicked the append function is called

    expandHistory.onclick = function()
    {
        append();
    }
}

// append function
function append()
{
    var node = document.createElement("p"); // create a variable called node and assign the paragraph element to it.
    // create a text node and store it in the variable textnode with all information to be appended
    var textnode = document.createTextNode("Year One: A New Beginning: In 2017, the first Save Point Summit was held in a modest convention hall with a focus on local indie developers, retro games, and tabletop gaming. It was a place for players to connect, try out new games, and attend panels that discussed gaming culture. The success of the inaugural event proved there was a demand for a convention that truly put the community at its heart. Rapid Growth: Expanding Horizons: By 2018, Save Point Summit had already outgrown its original venue. The event expanded to include major gaming studios, esports tournaments, and a variety of exclusive product reveals. Partnerships with some of the biggest names in gaming helped elevate the summit to a whole new level, attracting thousands of visitors each year. What was once a small gathering had become a must-attend event for gamers of all kinds. The Rise of Esports and Virtual Events: In 2020, Save Point Summit faced the challenge of adapting to a world changed by the COVID-19 pandemic. The team responded by hosting the first-ever virtual Save Point Summit, which brought together gaming fans and developers from all around the world. The virtual event included live-streamed tournaments, developer showcases, and community interactions, ensuring that the spirit of Save Point Summit endured despite the global challenges.Today: The Ultimate Gaming Experience: Fast forward to 2024, and Save Point Summit continues to grow and evolve. With a reputation for being at the cutting edge of gaming culture, it has become the go-to event for game reveals, celebrity panels, live esports, and a showcase of the latest innovations in gaming technology. From indie titles to AAA blockbusters, Save Point Summit has something for every gamer. What started as a dream is now an integral part of the global gaming calendar, and we are more committed than ever to celebrating the power of play, the joy of gaming, and the community that unites us all. Join us at the Save Point Summit and become part of a legacy that’s only just getting started.")
    node.appendChild(textnode); // append the textnode to the node variable creating a paragraph element with the text in textnode
    document.getElementById("history").appendChild(node); // append the node to the end of the element with the ID of history 
}

//jquery read less
//when the document is ready
$(document).ready(function() 
{
    //when the element with the id readLess is clicked ccall the function
    $("#readLess").click(function()
        {
            // hide the element with the id of history
            $("#history").hide();
        }
    );
});

// set an event listener to the element with the id of ajaxReadMore so that when it is cclicked it calls the loadDoc function
document.getElementById('ajaxReadMore').addEventListener('click', loadDoc);

// loadDoc function
function loadDoc() 
{
    // set the variable xhttp to a new XMLHttpRequest
    var xhttp = new XMLHttpRequest();
    // when the ready state changes call the function
    xhttp.onreadystatechange = function() {
        // if the ready state is 4 and the status is 200 (OK)
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            // send the response text to the element with the ID teamMembers
        document.getElementById("teamMembers").innerHTML = xhttp.responseText;
         }
    };
    // open the file teamInfo.txt and use GET to recieve the info, set true so that this is asynchronous
    xhttp.open("GET", "./teamInfo.txt", true);
    //send the data
    xhttp.send();
}

//jquery ajax
//when the document is ready
$(document).ready(function() {
    //when the element with the id contact is clicked
    $("#contact").click(function() {
        // get the contact.txt file and call the function while passing in the data to the function 
        $.get("./contact.txt", function(data)
            {
                // set the element with the Id target to this data
                $("#target").html(data);
            })
      });
    });
    



