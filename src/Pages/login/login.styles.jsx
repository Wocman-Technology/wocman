import styled from "styled-components";
import AuthImage from "../../assets/bg-image.jpg";
import { CustomButton } from "../../components/custom-button/custom-button.component";

export const Loginwrapper = styled.body`
    height: 100vh;
    width: auto;
    scroll-behavior: smooth;
    /* padding-bottom: 5rem; */
    background-image: url(${AuthImage});
    background-position: center;
    object-fit: contain;
    background-repeat: no-repeat;
    background-size: cover;
    .img__div {
        position: relative;
        margin: 1.1rem;
        cursor: pointer;
    }
    .custom-container {
        display: flex;
        padding: 2rem 5rem 5rem;
        margin: 0 auto 0;
        height: 90%;
        justify-content: space-between;
        div:nth-child(1) {
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        h2 {
            font-style: normal;
            font-weight: bold;
            font-size: 36px;
            line-height: 48px;
        }
        small {
            font-style: normal;
            font-weight: normal;
            font-size: 17px;
            line-height: 31px;
        }
            }
        div:nth-child(2){
            width: 40%;
            padding: 1rem 0.5rem;
            align-items: center;
            background: #FFFFFF;
            border-radius: 10px;
            div {
                display: block;
                margin: 0 auto;
                color: #552d1e;
                & > * {
                    margin-top: 0.6rem;
                    display: block;
                }
                small {
                    font-size: 0.9rem;
                }
                .google {
                    display: flex;
                    width: 100%;
                    &:hover {
                        div, button {
                        background: #FFF;
                        color: #552d1e;
                        }
                    }
                }
                .sign-in-form {
                    text-align: start;
                    label {
                        color: #000000;
                        small {
                        font-size: 0.9rem;
                        line-height: 28px;
                        }
                    }
                    .input-container {
                        min-width: 100%;
                        padding: 0 !important;
                          input {
                        display: block;
                        width: 100%;
                        mix-blend-mode: normal;
                        opacity: 1;
                        height: 38px;
                        font-size: 0.9rem;
                        border: 1px solid #1C1C1C;
                        box-sizing: border-box;
                        border-radius: 3px;
                        outline: none;
                        padding: 0 1rem;
                        &::placeholder {
                            font-size: 0.7rem;
                        }
                    }
                    }
                }
                .signup {
                    display: flex;
                    justify-content: space-evenly;
                    align-items: center;
                    margin-top: 0.8rem;
                    p, span {
                        text-transform: uppercase;
                        font-size: 0.8rem;
                        margin-bottom: 0;
                        padding-bottom: 0;
                        display: inline-block;
                        letter-spacing: 1.08333px;
                    }
                    span {
                        color: #4D4D4D;
                    }
                    a {
                        text-decoration: none;
                        display: inline-block;
                        margin-top: 6.8px;
                        color: #000000;
                        &:hover {
                            span {
                            text-decoration: underline !important;
                            }
                        }
                    }
                }
            }
        }
        @media screen and (max-width: 864px) {
            margin-top: 5rem;
            padding: 0 1.3rem;;
            width: 100%;
            flex-wrap: wrap;
            & > div {
                width: 100% !important;
                margin: 3rem 0;
            }
            div:nth-child(2) {
                margin-bottom: 5rem;
            }
        }
    }

`;

export const SignInWithGmail = styled(CustomButton)`
    margin: 0 auto 2rem;
    display: inline-block;
    border-left: none;
    border-radius: 6px;
    width: 100%;
    word-spacing: 1px;
    letter-spacing: 1.5px;
    padding-left: 0;
    padding-right: 0;
    font-size: 10px;
    text-transform: uppercase;
    font-weight: bolder;
     i {
            display: inline-block;
            font-size: 1rem;
            margin-right: 1rem;
        }
`

export const SignInButton = styled(CustomButton)`
    border-radius: 6px;
    font-size: 0.8rem;
    width: 60%;
    margin: 2.5rem auto 0;
    padding-bottom: 5px;
`

export const FormWrapper = styled.div`
    height: 70%;
    width: 80% !important;
    margin: 0 auto;
    text-align: center;
    justify-content: center;

.divider {
    display: block;
    overflow: hidden;
    margin: 0 auto;
    white-space: nowrap
}

.divider > span {
    position: relative;
    display: inline-block;
    margin: 0 auto;
    width: 30px
}

div.divider > span:before, div.divider > span:after {
    content: "";
    position: absolute;
    top: 50%;
    width: 9999px;
    border-top: solid 1px #D3D3D3
}

div.divider>span:before {
    right: 100%
}

div.divider>span:after {
    left: 100%
}
`