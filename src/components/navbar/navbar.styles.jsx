import styled from "styled-components";

export const NavWrapper = styled.nav`
  display: flex;
  width: 100%;

  nav {
    width: 100%;
    padding: 0 40px !important;
    background: #552d1e !important;
    display: flex !important;

    img {
      display: block;
      position: absolute;
      top: 0rem;
      left: 5rem;
    }
    ul:nth-child(1) {
      display: flex !important;
      margin: auto;
      margin-left: 17rem;
      font-size: 0.9rem;


      li {
        margin: 0 0.5rem;
      }
    }
    ul:not(:nth-child(1)) {
      li:nth-child(1) {
        a {
          button {
            width: 100%;
            min-height: 30px !important;
            text-align: center;
            padding-top: 8px !important;
            background: #778899 !important;
            box-shadow: 0px 5px 15px rgba(227, 184, 115, 0.2);
            border-radius: 2px;
            color: #fff5ee;
            font-size: 0.7rem;
          }
        }
      }
      li:not(:nth-child(1)) {
        button {
          width: 100%;
          min-height: 30px !important;
          text-align: center;
          padding-top: 8px !important;
          background: #fff5ee !important;
          box-shadow: 0px 5px 15px rgba(227, 184, 115, 0.2);
          border-radius: 2px;
          color: #552d1e;
          font-size: 0.7rem;
        }
      }
    }
  }

  @media (min-width: 768px) and (max-width: 900px){
      nav {
        ul:not(:nth-child(1)) {
        li {
          a {
            button {
              display: none !important;
            }
          }
        }
      }
      }
  }

  @media (max-width: 768px) {
    nav {
      padding: 0 15px !important;
      img {
      display: flex;
      position: static;
      z-index: 1;
      height: 60px;
      width: 50%;
      margin-bottom:0;
      top: 0;
      left: 0;
    }
    ul:nth-child(1) {
      margin-left: 0;
    }
      ul:not(:nth-child(1)) {
        li {
          a {
            button {
              width: 70%;
              display: block !important;
              margin: auto;
            }
          }
        }
      }
    }
  }
`;
