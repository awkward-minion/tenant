<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
    <style>
        @media only screen and (max-width: 600px) {
            .inner-body {
                width: 100% !important;
            }

            .footer {
                width: 100% !important;
            }
        }

        @media only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        }



/* 8888888888888888888888888888888888888888888888888888888888888888888888888888 */
/* Anchor tag Styles */
/* 8888888888888888888888888888888888888888888888888888888888888888888888888888 */

a:focus {
  outline: 1px dotted;
  outline: 5px auto -webkit-focus-ring-color;
}
a {
    text-decoration: none;
  -webkit-appearance: button;
  border-radius: 0;
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
  overflow: visible;
  text-transform: none;
  display: inline-block;
  font-weight: 600;
  color: #525f7f;
  text-align: center;
  vertical-align: middle;
  user-select: none;
  background-color: transparent;
  border: 1px solid transparent;
  padding: 0.625rem 1.25rem;
  line-height: 1.5;
  border-radius: 0.25rem;
  transition: all 0.15s ease;
  position: relative;
  will-change: transform;
  letter-spacing: 0.025em;
  font-size: 0.875rem;
  margin-top: 0.5rem;
  margin-bottom: 0.5rem;
}

a::-moz-focus-inner {
  padding: 0;
  border-style: none;
}

@media (prefers-reduced-motion: reduce) {
  .btn {
    transition: none;
  }
}
a:hover {
  color: #525f7f;
  text-decoration: none;
  box-shadow: 0 7px 14px rgba(50, 50, 93, 0.1), 0 3px 6px rgba(0, 0, 0, 0.08);
  transform: translateY(-1px);
}
a:focus {
  outline: 0;
  box-shadow: 0 7px 14px rgba(50, 50, 93, 0.1), 0 3px 6px rgba(0, 0, 0, 0.08);
}
.btn-outline-primary {
  color: #5e72e4;
  border-color: #5e72e4;
}
.btn-outline-primary:hover {
  color: #fff;
  background-color: #5e72e4;
  border-color: #5e72e4;
}
.btn-outline-primary:focus {
  box-shadow: 0 0 0 0 rgba(94, 114, 228, 0.5);
}
.btn-outline-primary:disabled {
  color: #5e72e4;
  background-color: transparent;
}


</style>

    <table class="" width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                <table class="" width="80%" cellpadding="0" cellspacing="0">
                    {{ $header ?? '' }}

                    <!-- Email Body -->
                    <tr>
                        <td class="" width="80%" cellpadding="0" cellspacing="0">
                            <table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" style="
                              box-shadow: 0 15px 35px rgba(50, 50, 93, 0.1), 0 5px 15px rgba(0, 0, 0, 0.07) !important;
">
                                <!-- Body content -->
                                <tr>
                                    <td class="content-cell">
                                        {{ Illuminate\Mail\Markdown::parse($slot) }}

                                        {{ $subcopy ?? '' }}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    {{ $footer ?? '' }}
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
