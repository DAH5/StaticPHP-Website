var email_addresses = document.getElementsByClassName( 'email-address' );

for( var ea = 0; ea < email_addresses.length; ea++ )
{
    var email_address_element = email_addresses.item( ea );

    var email_address = email_address_element.innerHTML.replaceAll( ' [dot] ', '.' ).replaceAll( ' [at] ', '@' );

    email_address_element.innerHTML = '<a href="mailto:' + email_address + '" target="_blank">' + email_address + '</a>';
}