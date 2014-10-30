Public Class FormPrincipal

    Private Sub TextBox1_TextChanged(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles TextBox1.TextChanged

    End Sub

    Private Sub WebBrowser1_DocumentCompleted(ByVal sender As System.Object, ByVal e As System.Windows.Forms.WebBrowserDocumentCompletedEventArgs) Handles WebBrowser1.DocumentCompleted

        Dim elementos As HtmlElementCollection
        elementos = WebBrowser1.Document.All
        For Each elemento As HtmlElement In elementos
            If elemento.GetAttribute("class").Equals("listing-item") Then

            End If
            TextBox1.Text += elemento.GetAttribute("class")
        Next
        MsgBox("CARGADO")
    End Sub

    Private Sub FormPrincipal_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load

    End Sub
End Class
