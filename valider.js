function verification()
{
    s = f[1].charAt(i);
 if(document.formulaire.nb_chambre.value !=((s >= 0) && (s <= 9))) 
        {
            alert("le nombre de chambres ne peut comporter que des chiffres");
            document.formulaire.nb_chambre.focus();
            return false;
        }
    }



