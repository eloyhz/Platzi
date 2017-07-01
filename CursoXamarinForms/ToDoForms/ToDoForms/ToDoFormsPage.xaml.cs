using Xamarin.Forms;

namespace ToDoForms
{
    public partial class ToDoFormsPage : ContentPage
    {
        void Handle_Clicked(object sender, System.EventArgs e)
        {
            if (string.IsNullOrEmpty(usuarioEntry.Text) || string.IsNullOrEmpty(passwordEntry.Text))
            {
                resultadoLabel.Text = "Debe escribir usuario y contraseña";
            }
            else
            {
                resultadoLabel.Text = "Inicio de sesión exitoso";
            }
        }

        public ToDoFormsPage()
        {
            InitializeComponent();
        }
    }
}
