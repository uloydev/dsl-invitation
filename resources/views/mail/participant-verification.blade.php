{{-- email body for registration confirmation --}}
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="height: 100vh; background-color:#aeaeae">
    <tr>
        <td align="center">
            <div style="width:50%; max-width:100%; background-color:white; padding: 2rem; border-radius: 10px">
                <p style="margin-bottom: 1rem">Dear {{ $participant->name }},</p>
                <p>Saturday, 30 November 2024</p>
                <p style="margin-bottom: 1rem">Your reservation for The Unbox Day:</p>
                <p>Has been created.</p>
                <p style="margin-bottom: 1rem">Department Sports Lab, Margonda Raya, Depok</p>
                <p style="margin-bottom: 1rem">Please click the link below for verification:</p>
                <a style="display: block; padding: .5rem 0; background-color:#1500b2; color:white; border-radius:1rem;margin-bottom: 1rem;"
                    href="{{ $link }}">Verikasi Email</a>
                <p style="margin-bottom: 2rem">We look forward to welcoming you to DSL!</p>
                <p>Sincerely,</p>
                <p>Department Sports Lab</p>
            </div>
        </td>
    </tr>
</table>
