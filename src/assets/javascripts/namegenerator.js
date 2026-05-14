function getAdjectivesWordList()
{
    var adjectivesWordList =
    {
        "colors":
        [
            "ashy",
            "blue",
            "green",
            "grey",
            "icy",
            "orange",
            "pink",
            "purple",
            "rainbow",
            "red",
            "turquoise",
            "yellow",
        ],
        "appearance":
        [
            "bald",
            "beautiful",
            "clean",
            "elegant",
            "fancy",
            "handsome",
            "magnificent",
            "shapely",
        ],
        "personality":
        [
            "agreeable",
            "ambitious",
            "brave",
            "calm",
            "clumsy",
            "delightful",
            "eager",
            "faithful",
            "fierce",
            "gentle",
            "happy",
            "harmless",
            "intimidating",
            "itchy",
            "jealous",
            "jolly",
            "kind",
            "lively",
            "nervous",
            "nice",
            "obedient",
            "polite",
            "proud",
            "sad",
            "scary",
            "silly",
            "thankful",
            "thoughtless",
            "victorious",
            "witty",
            "wonderful",
            "worried",
            "zealous",
        ],
        "conditions":
        [
            "alive",
            "better",
            "careful",
            "clever",
            "famous",
            "gifted",
            "hallowed",
            "helpful",
            "important",
            "liked",
            "odd",
            "popular",
            "powerful",
            "rich",
            "shy",
            "tender",
            "vast",
        ],
        "location":
        [
            "equatorial",
            "lunar",
            "northern",
            "oceanic",
            "polar",
        ],
        "sounds":
        [
            "cooing",
            "deafening",
            "echoing",
            "faint",
            "harsh",
            "hissing",
            "howling",
            "hushed",
            "husky",
            "loud",
            "melodic",
            "mute",
            "noisy",
            "purring",
            "quiet",
            "raspy",
            "resonant",
            "rhythmic",
            "shrill",
            "silent",
            "soft",
            "squeaking",
            "thundering",
            "tinkling",
            "wailing",
            "whining",
            "whispering",
        ],
        "tastes":
        [
            "acidic",
            "bitter",
            "cool",
            "delicious",
            "fresh",
            "nutritious",
            "salty",
            "savory",
            "sour",
            "spicy",
            "sweet",
            "tasty",
            "yummy",
        ],
        "time":
        [
            "ancient",
            "brief",
            "bustling",
            "early",
            "fast",
            "future",
            "hasty",
            "late",
            "long",
            "modern",
            "prompt",
            "quick",
            "rapid",
            "rushing",
            "short",
            "slow",
            "snappy",
            "speeding",
            "speedy",
            "swift",
            "whirlwind",
            "young",
        ],
    };

    return adjectivesWordList;
};

function getNounsWordList()
{
    var nounsWordList =
    {
        "animals":
        [
            "bear",
            "bee",
            "bobcat",
            "cat",
            "caterpillar",
            "cheetah",
            "dog",
            "dolphin",
            "elephant",
            "giraffe",
            "goat",
            "jellyfish",
            "leopard",
            "lion",
            "meerkat",
            "mouse",
            "panda",
            "sheep",
            "tiger",
            "wasp",
            "wolf",
            "zebra",
        ],
        "fruits":
        [
            "apple",
            "apricot",
            "avocado",
            "banana",
            "cherry",
            "cucumber",
            "fig",
            "grapefruit",
            "kumquat",
            "lemon",
            "lychee",
            "mango",
            "peach",
            "pepper",
            "pineapple",
            "plum",
            "potato",
            "prune",
            "raspberry",
            "strawberry",
            "tomato",
            "watermelon",
        ],
        "birds":
        [
            "albatross",
            "blackbird",
            "chicken",
            "chiffchaff",
            "crow",
            "curlew",
            "duck",
            "eagle",
            "goose",
            "kiwi",
            "osprey",
            "owl",
            "penguin",
            "pigeon",
            "robin",
            "sparrow",
            "swan",
            "woodpecker",
            "wren",
        ],
        "flowers":
        [
            "bluebell",
            "carnation",
            "crocus",
            "daffodil",
            "daisy",
            "dandelion",
            "lily",
            "orchid",
            "pansy",
            "poppy",
            "rose",
            "sunflower",
            "tulip",
        ],
        "metals":
        [
            "alloy",
            "aluminum",
            "antimony",
            "brass",
            "bronze",
            "chrome",
            "chromium",
            "copper",
            "gold",
            "gunmetal",
            "iridium",
            "iron",
            "lead",
            "magnesium",
            "metal",
            "mercury",
            "pewter",
            "platinum",
            "silver",
            "steel",
            "tin",
            "titanium",
            "tungsten",
            "zinc",
        ],
        "transport":
        [
            "balloon",
            "bicycle",
            "boat",
            "bus",
            "car",
            "coach",
            "helicopter",
            "jet",
            "lawnmower",
            "lifeboat",
            "lorry",
            "plane",
            "rickshaw",
            "ship",
            "skateboard",
            "tank",
            "taxi",
            "tractor",
            "train",
            "truck",
            "van",
        ],
    };

    return nounsWordList;
};

function getAdjectiveTypes()
{
    return Object.keys( getAdjectivesWordList() );
};

function getNounTypes()
{
    return Object.keys( getNounsWordList() );
};

function getRandomInt( max )
{
    return Math.floor( Math.random() * max );
};

function generateName( adjectiveCount = 2, nounCount = 1, style = "1" )
{
    var generatedName = "";
    var nameSegments = [];

    var adjectivesWordList = getAdjectivesWordList();
    var nounsWordList = getNounsWordList();

    var adjectiveTypes = getAdjectiveTypes();
    var nounTypes = getNounTypes();

    for( var a = 0; a < adjectiveCount; a++ )
    {
        var adjectiveType = adjectiveTypes[ getRandomInt( adjectiveTypes.length ) ];
        var adjectiveTypeWordsList = adjectivesWordList[ adjectiveType ];

        var adjectiveWord = adjectiveTypeWordsList[ getRandomInt( adjectiveTypeWordsList.length ) ];

        nameSegments.push( adjectiveWord );
    }

    for( var n = 0; n < nounCount; n++ )
    {
        var nounType = nounTypes[ getRandomInt( nounTypes.length ) ];
        var nounTypeWordsList = nounsWordList[ nounType ];
        var nounWord = nounTypeWordsList[ getRandomInt( nounTypeWordsList.length ) ];

        nameSegments.push( nounWord );
    }

    for( var nS = 0; nS < nameSegments.length; nS++ )
    {
        var nameSegment = nameSegments[ nS ];

        if( style == "2" )
        {
            generatedName += capitaliseWords( nameSegment );
        }
        else if( style == "3" )
        {
            if( generatedName )
                generatedName += ' ' + capitaliseWords( nameSegment );
            else
                generatedName = capitaliseWords( nameSegment );
        }
        else if( style == "4" )
        {
            if( generatedName )
                generatedName += ' ' + nameSegment;
            else
                generatedName = capitaliseString( nameSegment );

            if( nS == nameSegments.length - 1 )
                generatedName += '.';
        }
        else
        {
            if( generatedName )
                generatedName += '-' + nameSegment;
            else
                generatedName = nameSegment;
        }
    }

    return generatedName;
};

function doNameGeneration()
{
    var adjectiveChoice = document.getElementById( 'adjective-choice' );
    var nounChoice = document.getElementById( 'noun-choice' );
    var styleChoice = document.getElementById( 'style-choice' );

    if( adjectiveChoice == null || nounChoice == null || styleChoice == null )
        return;

    var adjectiveCount = adjectiveChoice.value;
    var nounCount = nounChoice.value;
    var styleValue = styleChoice.value;

    if( adjectiveCount == null || nounCount == null || styleValue == null )
        return;

    if( adjectiveCount == "0" )
        adjectiveCount = getRandomInt( 3 ) + 1;

    var generatedName = generateName( adjectiveCount, nounCount, styleValue );

    displayText( generatedName );
};

function displayText( generatedName )
{
    var nameGeneratorForm = document.getElementById( 'name-generator-form' );

    nameGeneratorForm.style.display = 'flex';

    var nameElement = document.getElementById( 'name' );

    if( generatedName )
        nameElement.innerHTML = '<pre><code>' + generatedName + '</code></pre>';
};

function capitaliseWords( wordsToCapitalise )
{
    var capitalisedWords = '';

    var words = wordsToCapitalise.split( ' ' );

    for( var w = 0; w < words.length; w++ )
    {
        var word = words[ w ];
        var capitalisedWord = capitaliseString( word );

        if( capitalisedWords )
            capitalisedWords += ' ' + capitalisedWord;
        else
            capitalisedWords = capitalisedWord;
    }

    return capitalisedWords;
}

function capitaliseString( stringToCapitalise )
{
    var capitalisedString = '';

    for( var s = 0; s < stringToCapitalise.length; s++ )
    {
        var stringCharacter = stringToCapitalise.substring( s, s + 1 );

        if( s == 0 )
            stringCharacter = stringCharacter.toUpperCase();
        else
            stringCharacter = stringCharacter.toLowerCase();

        capitalisedString += stringCharacter;

    }

    return capitalisedString;
}

window.onload = function() { displayText( 'Select from the options above.' ); };