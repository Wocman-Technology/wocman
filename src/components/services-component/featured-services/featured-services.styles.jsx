import styled from 'styled-components';

export const FeaturedServicesWrapper = styled.section`

    display: grid;
    grid-template-columns: repeat(4, 270px);
    grid-row-gap: 7rem;
    justify-content: center;
    margin: 5rem 0 2rem;
    padding: 0 4rem;

    @media (min-width: 900px) and (max-width: 1100px) {
    grid-template-columns: repeat(3, 270px);
    margin: 0 auto;
  }

  @media (min-width: 769px) and (max-width: 899px) {
    grid-template-columns: repeat(2, 270px);
    margin: 0 auto;
  }

    @media (max-width: 768px){
        grid-template-columns: 270px;
        grid-row-gap: unset;
        padding: 0 4rem;
    }
`