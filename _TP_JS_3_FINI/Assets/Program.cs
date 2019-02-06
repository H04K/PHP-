//pour intégrer du code au projet (un peu comme les include C)
using System;
using System.Threading; // Pour faire la pause
using System.Runtime.InteropServices;
using System.Collections.Generic; // Conio


namespace HestersThéophile// Le namespace sert principalement à regrouper des classes
{
    class Conio
    {
        [DllImport("crtdll.dll")]
        public static extern int _kbhit();

        [DllImport("crtdll.dll")]
        public static extern int _getch();
    }

    class Asc // Les classes sont des structures de données 
    {
        /*---------Données et propriétés-----------*/
        // p pour position et e pour etage de base 
        int p;
        int e;
        const int TX = 20;// Maximum d'étages, c'est aussi une propriété
        static Random Rnd = new Random();// Rnd est un objet de la clase Random c'est aussi
                                         // c'est aussi un élément static ce qui signifie unique et commun à tous les objets de la classe      



        /*---------METHODES--------------*/
        public void Init_Alea()
        {
            e = Rnd.Next(TX);//Prend un étage aléatoire en 0 et 20
            p = Rnd.Next(e);//Prend une positions aléatoire entre les étages 
        }// Choisie le nombre d'étages max entre 0 et 20 ainsi que la position de l'ascenceur à l'appel
        public void Aff()//Ceci est une méthode elle peut s'apparenter aux fonctions en C
        {
            Console.WriteLine("\n\n l'immeuble possède " + e +" étages."+" Vous êtes à l'étage = " + p + "\n\n");
        }
        public void MoveUS() // FINI A RELIRE A LA FIN
        {

            Aff();
            Console.WriteLine("A quel étage souaitez-vous vous rendre");
            string saisie = Console.ReadLine();
            int choix;
            if (!int.TryParse(saisie, out choix))
      
                if (choix == p)
                {
                    Console.WriteLine("Vous-y êtes déjà");
                }
           
            if (choix <= e)
            {

                {

                    for (; p < choix;p++)
                    {
                       
                        Console.Write("L'ascenceur est à létage " + p + "\n");
                     
                    }
                }


                for (; p > choix;p--)
                {
                   
                    Console.Write("L'ascenceur est à létage " + p + "\n");
                    
                }
                Console.Write("L'ascenceur est à létage " + p + "\n");
            }
            else
                Console.WriteLine("Vous ne pouvez pas ");
        } // L'utilisateur choisie l'étage
        public void Move_Alea()
        {

            Aff();
            int choix  = Rnd.Next(e);
            Console.WriteLine("Vous demandez l'étage " + choix + "\n");
            if (choix == p)
            {
                Console.WriteLine("Vous-y êtes déjà");
            }
            if (choix < e)
            {

                {

                    for (; p < choix; p++)
                    {
                        
                        Console.Write("L'ascenceur est à létage " + p + "\n");

                    }
                }


                for (; p > choix; p--)
                {
                   
                    Console.Write("L'ascenceur est à létage " + p + "\n");

                }
                Console.Write("L'ascenceur est à létage " + p + "\n");

            }
            else
                Console.WriteLine("Vous ne pouvez pas ");
        }// Tout est aléatoire FINI A RELIRE A LA FIN
        public void Move(int choix)
        {



            p = choix - 5;
            e = 20;
            Console.WriteLine("Vous demandez L'étage " + choix + "\n");
            if (choix < e)
            {

                {

                    for (; p <= choix; p++)
                    {
                       
                        Console.Write("L'ascenceur est à létage " + p + "\n");

                    }

                }

                Console.WriteLine("\n\n l'immeuble possède " + e + " étages." + " Vous êtes à l'étage = " + choix + "\n\n");
            }


        } // L'ascenceur fais le parcours prédefini ( 5 10 15 )
        public void Move()
        {
            Move(5);
            Move(10);
            Move(15);

        }//Cette Méthode est une surcharge, elle permet de changer seulement le paramètre d'une méthode lors d'un appel multiple
      
        /*--------------*/
        
    }
    class Program
    {
        
        static void Main(string[] args)
        {
          Asc e = new Asc(); //constructeur par defaut
            e.Init_Alea();

           // e.MoveUS(); // L'utilisateur choisi l'étage

            //e.Move_Alea(); // L'étage est choisi aléatoirement

            // Succession d'étages (5 . 10 . 15)
            //e.Move();
            

            Console.ReadKey();
        }
    }
}

/*QUESTIONS PARTIE 1 */
// Il n'y a pas de "this" dans ce programme, mais ce mot clé se réfère à l’instance courante de la classe et est également utilisé comme un modificateur du premier paramètre d’une méthode d’extension.
// Les droits d'accées sont : public, private, protected il permete de définir la portée d'une classe, une variable ou tout autre élément dans un programme
//Pour accéder à une propriéte depuis un objet : nomObjet.nomPropriete
//Pour accéder à une méthode  à partir d'un objet : nomObjet.nomMethode